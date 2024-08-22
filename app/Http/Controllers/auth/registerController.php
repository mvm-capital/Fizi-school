<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRegistration;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use App\Jobs\SendVerificationCode;
use Illuminate\Support\Facades\Auth;
use App\Mail\VerificationEmail;

use Illuminate\Http\Request;

class registerController extends Controller
{
    public function register()
    {
        return view('auth.register');
    }

    public function newUser(UserRegistration $request)
    {
        $validated = $request->validated();
        $user = $this->create($validated);

        session()->put('email', $user->email);

        Mail::to($user->email)->queue(new VerificationEmail($user, $user->verification_code));

        return redirect()->route('auth.twofactor')->with('success', 'Please check your email to verify your account.');
    }


    protected function create(array $data)
    {
        return User::create([
        
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'verification_code' => Str::random(4),
        ]);
    }


    public function twofactor()
    {
        // Retrieve the email from the session
        $email = session('email');

        return view('auth.twofactor', compact('email'));
    }

    public function verifyCode(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email'],
            'code' => ['required', 'array', 'size:4'],
            'code.*' => ['required'],
        ]);

        $email = $request->input('email');
        $code = implode('', $request->input('code'));

        $user = User::where('email', $email)->first();

        if (!$user || $user->verification_code !== $code) {
            return redirect()->back()->withErrors(['code' => 'The verification code is incorrect.']);
        }

        // Mark user as verified and log them in
        $user->email_verified_at = now();
        $user->email_verified = 1;
        $user->last_login_at = now();
        $user->save();

        // Log the user in
        Auth::login($user);

        // Regenerate the session ID to prevent session fixation
        $request->session()->regenerate();


        return redirect()->route('admin.home')->with('success', 'Your email has been verified successfully!');
    }

    public function resendVerificationEmail(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email'],
        ]);

        $email = $request->input('email');
        $user = User::where('email', $email)->first();

        if (!$user) {
            return redirect()->back()->withErrors(['email' => 'User not found.']);
        }

        // Generate a new verification code
        $verificationCode = Str::random(4);
        $user->verification_code = $verificationCode;
        $user->save();

        // Send verification email
        Mail::to($user->email)->queue(new VerificationEmail($user->email, $verificationCode));

        return redirect()->back()->with('success', 'A new verification email has been sent.');
    }
}
