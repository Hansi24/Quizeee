<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;

Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::get('/users', [UserController::class, 'index']);
Route::get('/', [AuthController::class, 'showHome']);

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    });

    Route::get('/logout', [AuthController::class, 'logout']);
    Route::get('/ol', [AuthController::class, 'ol'])->name('ol');
    Route::get('/al', [AuthController::class, 'al'])->name('al');
    Route::get('/it', [AuthController::class, 'it'])->name('it');
    Route::get('/general', [AuthController::class, 'general'])->name('general');

});