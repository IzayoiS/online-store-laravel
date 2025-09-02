<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use Illuminate\Support\Facades\Route;

Route::get('register/check', [RegisteredUserController::class, 'check'])->name('api-register-check');
