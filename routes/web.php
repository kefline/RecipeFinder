<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmailVerificationController;

// Redirect to login if accessing the root
Route::get('/', function () {
    return redirect()->route('auth.login');
});

// Login and Register routes
Route::get('/login', [AuthController::class, 'loginForm'])->name('auth.login');
Route::post('/login', [AuthController::class, 'login'])->name(' auth.login.submit');
Route::get('/register', [AuthController::class, 'create'])->name(' auth.register');
Route::post('/register', [AuthController::class, 'store'])->name('auth.register.store');
Route::get('/forgot_password', [AuthController::class, 'forgot_password'])->name('auth.forgot_password');

// Email Verification routes
Route::get('/email/verify', function (Request $request) {
    if ($request->user()->hasVerifiedEmail()) {
        return redirect()->route('index'); // Redirect to index if already verified
    }
    return view('verify-email'); // Show the verification notice if not verified
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
    return redirect()->route('login')->with('success', 'Your email has been verified. You can now log in.'); // Redirect to login
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();
    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.resend');

// Dashboard or home page route protected by auth and verified email
Route::get('/index', [UserController::class, 'index'])->middleware(['auth', 'verified'])->name('index');

Route::get('/send-test-email', [EmailVerificationController::class, 'sendTestEmail'])->name('send.test.email');





Route::get('/dashboard',[UserController::class, 'dashboard'])->name('dashboard');
Route::get('/about',[UserController::class, 'about'])->name('about');
Route::get('/category',[UserController::class, 'category'])->name('category');
Route::get('/contact',[UserController::class,'contact'])->name('contact');
