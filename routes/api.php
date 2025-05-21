<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserSettings\UserSettingController;

Route::post('/complete-profile', [UserSettingController::class, 'completeProfile'])->middleware(['web', 'auth']);
