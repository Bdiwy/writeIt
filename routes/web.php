<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\User\UserController;
use App\Http\Middleware\EnsureProfileIsComplete;
use App\Http\Controllers\Explore\ExploreController;
use App\Http\Controllers\Post\PostController;

// Public or Feed Page at '/'
Route::get('/', function () {
    if (!Auth::check()) {
        return view('home');
    }

    return view('pages.feed.index');
})->middleware(['auth.optional', EnsureProfileIsComplete::class])->name('home');

Route::controller(AuthController::class)->middleware('guest')->group(function () {
    Route::get('/register', 'showRegister')->name('show.register');
    Route::get('/login', 'showLogin')->name('show.login');
    Route::post('/register', 'register')->name('register');
    Route::post('/login', 'login')->name('login');
});

// Logout
Route::get('/logout', [AuthController::class, 'logout'])->middleware('auth')->name('logout');

Route::controller(UserController::class)->middleware('auth')->group(function () {
    Route::get('/complete/profile',  'showCompleteProfile')
        ->name('show.CompleteProfile');
    Route::get('/settings',  'showSettingsProfile')
        ->name('show.SettingsProfile');
    Route::get('/Profile',  'showProfile')
        ->name('show.Profile');
});

Route::controller(ExploreController::class)->middleware('auth')->group(function () {
    Route::get('/explore',  'showExplore')
        ->name('show.showExplore');
});

Route::post('/posts', [PostController::class, 'store'])->middleware('auth')->name('posts.store');

Route::get('about', function () {
    return view('pages.about.index');
})->name('about');
