<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserSettings\UserSettingController;

Route::post('/complete-profile', [UserSettingController::class, 'completeProfile'])->middleware(['web', 'auth']);
Route::post('/update-settings',  [UserSettingController::class, 'updateSettings'])->middleware(['web', 'auth']);