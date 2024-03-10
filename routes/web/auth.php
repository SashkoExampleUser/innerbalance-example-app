<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\Auth\AuthController;
use App\Http\Controllers\Web\Auth\LoginController;
use App\Http\Controllers\Web\Auth\LogoutController;

Route::get('login', LoginController::class)
    ->name('login');

Route::post('login', AuthController::class)
    ->name('auth');
Route::post('logout', LogoutController::class)
    ->name('logout');
