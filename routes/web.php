<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\contactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\auth\registerController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\GoogleAuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('client.index');
})->name('home');

Route::get('/home',[HomeController::class, 'home'])->name('client.home');

Route::get('/about-us',[HomeController::class, 'aboutUs'])->name('client.about-us');

Route::get('/blog',[HomeController::class, 'blog'])->name('client.blog');

Route::get('/gallery',[HomeController::class, 'gallery'])->name('client.gallery');

Route::get('/contact',[HomeController::class, 'contact'])->name('client.contact');

Route::get('/donate',[HomeController::class, 'donate'])->name('client.donate');

Route::get('/blog_detail',[HomeController::class, 'blogDetail'])->name('client.blog_detail');


Route::post('/send-email', [contactController::class, 'sendEmail'])->name('send.email');

Route::get('/Maintenance',[HomeController::class, 'maintenance'])->name('error.maintenance');

//-----------------------------------------AUTH-----------------------------------------------------------------------------
Route::get('/login', [LoginController::class, 'login'])->name('auth.login');

Route::post('/login', [LoginController::class, 'loginUser'])->name('auth.login-user');

Route::get('/forgot-password', [LoginController::class, 'forgotpassword'])->name('auth.forgotpassword');

Route::get('/password-reset', [LoginController::class, 'passwordreset'])->name('auth.passwordreset');

Route::get('/register', [RegisterController::class, 'register'])->name('auth.register');

Route::get('/2-factor', [RegisterController::class, 'twofactor'])->name('auth.twofactor');

Route::post('/verify-code', [RegisterController::class, 'verifyCode'])->name('auth.verifyCode');

Route::post('/new-user', [RegisterController::class, 'newUser'])->name('auth.newUser');

Route::post('/logout', function () {
    Auth::logout();
    session()->invalidate();
    session()->regenerateToken();
    return redirect('/login');
})->name('logout');

Route::post('/resend-verification-email', [RegisterController::class, 'resendVerificationEmail'])->name('auth.resendVerificationEmail');


Route::post('password/email', [LoginController::class, 'sendResetLinkEmail'])->name('password.email');

Route::get('password/reset/{token}', [LoginController::class, 'showResetForm'])->name('password.reset');

Route::post('password/reset', [LoginController::class, 'reset'])->name('password.update');
//--------------------------------------------------------GOOGLE AUTHENTICATION------------------------------------------------
Route::get('auth/google/redirect', [GoogleAuthController::class, 'redirect'])->name('google.redirect');

Route::get('auth/google/callback', [GoogleAuthController::class, 'callback'])->name('google.callback');






//---------------------------------------------------aDMIN ROUTES-------------------------------------------------
Route::get('/dashboard',[adminController::class, 'show'])->name('admin.home');
