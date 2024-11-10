<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmailVerificationController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\SocialiteController;



// Route::controller(SocialiteController::class)->group(function () {
//     Route::get('auth/redirection/{provider}', 'authproviderRedirect')->name('auth.redirection');
//     Route::get('auth/{provider}/callback', 'Socialauthentification')->name('auth.callback');
// });

Route::controller(SocialiteController::class)->group(function () {
    Route::get('auth/google', 'googlelogin')->name('auth.google');
    Route::get('auth/google-callback', 'googleAunthentication')->name('auth.google-callback');
    Route::get('auth/facebook', 'facebooklogin')->name('auth.facebook');
    Route::get('auth/facebook-callback', 'facebookAunthentication')->name('auth.facebook-callback');
});


Route::get('/', [AuthController::class, 'loginForm'])->name('auth.login');
Route::post('/login', [AuthController::class, 'login'])->name('auth.login.submit');
Route::get('/register', [AuthController::class, 'create'])->name('auth.register');
Route::post('/register', [AuthController::class, 'store'])->name('auth.register.store');
Route::post('logout', [AuthController::class, 'logout'])->name('auth.logout');

//forgot password and reset password through either email or phone 

// Route::get('/forgot-password', [AuthController::class, 'forgot_password'])->name('auth.forgot_password');
Route::get('/forgot-password', function () {
    return view('auth.forgot_password');
})->name('password.request');

Route::post('/forgot-password', [ForgotPasswordController::class, 'passwordEmail']);

Route::get('/reset-password/{token}', function ($token) {
    return view('auth.reset_password', ['token' => $token]);
})->name('password.reset');

Route::post('/reset-password', [ForgotPasswordController::class, 'passwordUpdate'])->name('password.update');


// Route::get('/dashboard', [UserController::class, 'dashboard'])->name('dashboard');


Route::get('/dashboard', [UserController::class, 'dashboard'])->name('dashboard');
Route::get('/about', [UserController::class, 'about'])->name('about');
Route::get('/category', [UserController::class, 'category'])->name('category');
Route::get('/contact', [UserController::class, 'contact'])->name('contact');
