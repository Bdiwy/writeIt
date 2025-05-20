<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\User\UserController;
use App\Http\Middleware\EnsureProfileIsComplete;

// Public or Feed Page at '/'
Route::get('/', function () {
    if (!Auth::check()) {
        return view('home');
    }

    return view('pages.feed.index');
})->middleware(['auth.optional', EnsureProfileIsComplete::class])->name('home');

// Auth Routes for Guests
Route::controller(AuthController::class)->middleware('guest')->group(function () {
    Route::get('/register', 'showRegister')->name('show.register');
    Route::get('/login', 'showLogin')->name('show.login');
    Route::post('/register', 'register')->name('register');
    Route::post('/login', 'login')->name('login');
});

// Logout
Route::get('/logout', [AuthController::class, 'logout'])->middleware('auth')->name('logout');

// Profile Completion Page (auth only, no profile check)
Route::get('/complete/profile', [UserController::class, 'showCompleteProfile'])
    ->middleware('auth')
    ->name('show.CompleteProfile');
