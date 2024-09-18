<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('register', [RegisteredUserController::class, 'create'])->name('register');
Route::post('register', [RegisteredUserController::class, 'store']);

Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);

// Define dashboard routes based on user role
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('admin/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');

    Route::get('charity/dashboard', function () {
        return view('charity.dashboard');
    })->name('charity.dashboard');

    Route::get('volunteer/dashboard', function () {
        return view('volunteer.dashboard');
    })->name('volunteer.dashboard');
});
