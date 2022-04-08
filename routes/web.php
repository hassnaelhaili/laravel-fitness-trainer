<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\RegisterController;


Route::get('/register',[RegisterController::class,'register'])->name('register_form');
Route::post('registration', [RegisterController::class,'registration'])->middleware('registration_user');
Route::post('/register-user',[RegisterController::class,'registerUser'])->name('register-user');
Route::post('/login-user',[RegisterController::class,'loginUser'])->name('login-user');
Route::get('/dashboard',[RegisterController::class,'dashboard']);
Route::get('/logout' ,[RegisterController::class,'logout']);
