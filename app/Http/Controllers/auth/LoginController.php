<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Models\User;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\ValidationException;
use Illuminate\Database\QueryException;
use Exception;

class LoginController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function forgotpassword()
    {
        return view('auth.forgot_password');
    }

    public function passwordreset()
    {
        return view('auth.passwordreset');
    }

    public function loginUser(Request $request)
    {
        try {
            $request->validate([
                'email' => 'required|email',
                'password' => 'required',
            ]);

            $credentials = $request->only('email', 'password');

            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();

                Log::info('User logged in successfully.', [
                    'email' => $request->email,
                    'user_id' => Auth::id(),
                ]);

                return redirect()->route('admin.home')->with('status', 'Logged in successfully!');
            }

            Log::warning('Failed login attempt.', [
                'email' => $request->email,
            ]);

            return redirect()->back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ])->onlyInput('email'); // Preserve the email input value

        } catch (ValidationException $e) {
            Log::error('Validation error during login attempt.', [
                'error' => $e->getMessage(),
                'input' => $request->all(),
            ]);

            return redirect()->back()->withErrors($e->errors())->withInput();
        } catch (Exception $e) {
            Log::error('Unexpected error during login attempt.', [
                'error' => $e->getMessage(),
                'input' => $request->all(),
            ]);

            return redirect()->back()->withErrors([
                'email' => 'An unexpected error occurred. Please try again later.',
            ])->withInput();
        }
    }



    // Handle sending the reset link email
    public function sendResetLinkEmail(Request $request)
    {
        try {
            // Validate the request
            $request->validate(['email' => 'required|email']);

            // Check if the user exists
            $user = User::where('email', $request->email)->first();

            if ($user) {
                // Generate a plain token
                $token = Str::random(60);

                // Insert the token into the database
                DB::table('password_reset_tokens')->insert([
                    'email' => $user->email,
                    'token' => $token,
                    'created_at' => now(),
                ]);

                // Send the reset link email
                Mail::send('emails.reset_password', ['token' => $token], function ($message) use ($user) {
                    $message->to($user->email);
                    $message->subject('Password Reset Request');
                });

                return back()->with('success', 'We have emailed your password reset link!');
            }

            return back()->withErrors(['email' => 'No user found with that email address.']);
        } catch (ValidationException $e) {
            Log::error('Validation error in sending password reset link.', [
                'error' => $e->getMessage(),
                'input' => $request->all(),
            ]);

            return back()->withErrors($e->errors())->withInput();
        } catch (QueryException $e) {
            Log::error('Database error while inserting password reset token.', [
                'error' => $e->getMessage(),
                'input' => $request->all(),
            ]);

            return back()->withErrors([
                'email' => 'There was a problem saving the password reset token. Please try again later.',
            ])->withInput();
        } catch (Exception $e) {
            Log::error('Unexpected error while sending password reset link.', [
                'error' => $e->getMessage(),
                'input' => $request->all(),
            ]);

            return back()->withErrors([
                'email' => 'An unexpected error occurred. Please try again later.',
            ])->withInput();
        }
    }

    // Show the reset form
    public function showResetForm($token)
    {
        return view('auth.passwordreset', ['token' => $token]);
    }

    // Handle the password reset
    public function reset(Request $request)
    {
        try {
            Log::info('Password reset request initiated.', [
                'email' => $request->email,
                'token' => $request->token,
            ]);

            // Validate the request
            $request->validate([
                'email' => 'required|email',
                'password' => 'required|string|confirmed',
                'token' => 'required'
            ]);

            // Retrieve the reset record directly without hashing the token
            $resetRecord = DB::table('password_reset_tokens')->where('token', $request->token)->first();

            Log::info('Reset record fetched from database.', [
                'resetRecord' => $resetRecord,
            ]);

            if (!$resetRecord) {
                Log::warning('Invalid token provided.', [
                    'token' => $request->token,
                ]);
                return back()->withErrors(['token' => 'Invalid token.']);
            }

            // Fetch the user associated with the reset record
            $user = User::where('email', $resetRecord->email)->first();

            Log::info('User fetched from database.', [
                'user' => $user,
            ]);

            if ($user) {
                // Update the user's password
                $user->password = Hash::make($request->password);
                $user->save();

                Log::info('User password updated.', [
                    'user_id' => $user->id,
                ]);

                // Delete the reset token after successful password reset
                DB::table('password_reset_tokens')->where('email', $user->email)->delete();

                Log::info('Password reset token deleted.', [
                    'email' => $user->email,
                ]);

                return redirect()->route('auth.login')->with('status', 'Password has been reset. You can now log in.');
            }

            Log::warning('No user found with provided email address.', [
                'email' => $resetRecord->email,
            ]);

            return back()->withErrors(['email' => 'No user found with that email address.']);
        } catch (ValidationException $e) {
            Log::error('Validation error during password reset.', [
                'error' => $e->getMessage(),
                'input' => $request->all(),
            ]);

            return back()->withErrors($e->errors())->withInput();
        } catch (QueryException $e) {
            Log::error('Database error during password reset.', [
                'error' => $e->getMessage(),
                'input' => $request->all(),
            ]);

            return back()->withErrors([
                'email' => 'There was a problem processing your request. Please try again later.',
            ])->withInput();
        } catch (Exception $e) {
            Log::error('Unexpected error during password reset.', [
                'error' => $e->getMessage(),
                'input' => $request->all(),
            ]);

            return back()->withErrors([
                'email' => 'An unexpected error occurred. Please try again later.',
            ])->withInput();
        }
    }
}
