<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\pages\HomepageController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    Route::get('/register', [AuthController::class, 'showRegister'])->name('auth.register');
    Route::get('/login', [AuthController::class, 'showLogin'])->name('auth.login');
    Route::post('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/login', [AuthController::class, 'login'])->name('login');
});

Route::middleware('auth')->group(function () {

});

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/', [HomepageController::class, 'index'])->name('pages.index');

