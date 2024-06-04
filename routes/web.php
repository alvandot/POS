<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Auth\AuthnController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    Route::get('/', [AuthnController::class, 'index'])->name('login_page');
    Route::post('/login', [AuthnController::class, 'login'])->name('login');
    Route::get('/register', [RegisterController::class, 'index'])->name('register_page');
    Route::post('/register', [RegisterController::class, 'store'])->name('register');
});

Route::middleware('auth')->group(function () {
Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');
Route::post('/logout', [AuthnController::class, 'logout'])->name('logout');
});
