<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', [AuthController::class,'login']);
Route::get('/register', [AuthController::class,'register']);
Route::post('/register_post', [AuthController::class,'register_post']);
Route::get('/forgot-password', [AuthController::class,'forgot_password']);
