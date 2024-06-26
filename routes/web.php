<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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
