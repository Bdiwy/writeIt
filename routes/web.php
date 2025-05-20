<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\User\UserController;

Route::get('/', function () {
    return Auth::check()
        ? view('pages.feed.index')    
        : view('home');  
})->name('home');

Route::controller(AuthController::class)->middleware('guest')->group(function () {
    Route::get('/register', 'showRegister')->name('show.register');
    Route::get('/login', 'showLogin')->name('show.login');
    Route::post('/register', 'register')->name('register');
    Route::post('/login', 'login')->name('login');
});

Route::get('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');


Route::controller(UserController::class)->middleware('auth')->group(function () {
    Route::get('/complete/profile', 'showCompleteProfile')->name('show.CompleteProfile');
});
