<?php

use App\Http\Controllers\Auth\AuthnController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    Route::get('/', [AuthnController::class, 'index']);
    Route::post('/login', [AuthnController::class, 'login'])->name('login');
});
Route::post('/logout', [AuthnController::class, 'logout'])->name('logout');
