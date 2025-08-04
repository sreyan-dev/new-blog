<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;

Route::resource('posts',PostController::class);
Route::resource('users',UserController::class);

Route::get('login-view',[AuthController::class,'login_view'])->name('login.view');
Route::post('login',[AuthController::class,'login'])->name('login');

Route::get('registration',[AuthController::class,'registration'])->name('registration');
Route::post('register',[AuthController::class,'register'])->name('register');