<?php

use App\Http\Controllers\Api\LocationController;
use App\Http\Controllers\Auth\RegisteredUserController;
use Illuminate\Support\Facades\Route;

Route::get('register/check', [RegisteredUserController::class, 'check'])->name('api-register-check');
Route::get('provinces', [LocationController::class, 'provinces'])->name('api-provinces');
Route::get('regencies/{provinces_id}', [LocationController::class, 'regencies'])->name('api-regencies');
