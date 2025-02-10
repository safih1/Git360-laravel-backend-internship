<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;

//Home
Route::get('/', [HomeController::class, 'index'])->name('home'); 

//registration
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/registration_post', [AuthController::class, 'registration_post'])->name('registration_post');

//login
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login_post', [AuthController::class, 'login_post'])->name('login_post');


// forgot password
Route::get('/forgot-password', [AuthController::class, 'forgotPassword'])->name('forgot-password');
Route::post('/forgot-password-post', [AuthController::class, 'forgotPasswordPost'])->name('forgot-password-post');

// reset password
Route::get('/reset-password/{token}', [AuthController::class, 'resetPassword'])->name('reset-password');
Route::post('postreset/{token}', [AuthController::class],'postReset')->name('postreset');


Route::group(['middleware' => 'admin'], function () {
    Route::get('admin/dashboard',[DashboardController::class, 'dashboard'])->name('admin.dashboard');
});


Route::group(['middleware' => 'user'], function () {
    Route::get('user/dashboard',[DashboardController::class, 'dashboard'])->name('user.dashboard');
});


Route::get('/logout', [AuthController::class, 'logout'])->name('logout');