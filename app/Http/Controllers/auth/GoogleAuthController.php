<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Laravel\Socialite\Facades\Socialite;

class GoogleAuthController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }

    /**
     * Handle Google callback.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function callback()
    {
        try {
            $user = Socialite::driver('google')->user();

            $findUser = User::where('email', $user->email)->first();

            if ($findUser) {
                // Check if the user account is suspended
                if ($findUser->status === "suspended") {
                    return redirect()->route('login')->with('error', 'This account has been suspended.');
                }

                // Log the user in
                Auth::login($findUser);
                return redirect()->intended('/dashboard');
            } else {
                // Redirect back with an error if the user is not found
                return redirect()->route('login')->with('error', 'No account found for this email. Please contact support.');
            }
        } catch (Exception $e) {
            // Log the error for debugging
            Log::error('Google Authentication Error: ' . $e->getMessage());

            return redirect()->route('login')->with('error', 'Something went wrong while logging in. Please try again.');
        }
    }
}
