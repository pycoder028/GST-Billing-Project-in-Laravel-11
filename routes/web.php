<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;

Route::get('/', [AuthController::class,'login']);
Route::post('/login_post', [AuthController::class,'login_post']);
Route::get('/register', [AuthController::class,'register']);
Route::post('/register_post', [AuthController::class,'register_post']);
Route::get('/forgot-password', [AuthController::class,'forgot_password']);

Route::group(['middleware'=> 'admin'], function () {
    Route::get('admin/dashboard', [DashboardController::class,'dashboard']);
});
