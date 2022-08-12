<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProgramController;




// here define register routes for post 

Route::get('/register',[RegisterController::class,'r']);

Route::post('/register',[RegisterController::class,'registration']);
Route::get('/registration/',[RegisterController::class,'khdam']);


Route::get('/' ,[LoginController::class,'index']);

Route::get('/login',[LoginController::class,'login']);
Route::post('/login',[LoginController::class,'loginUser']);

Route::get('/logout',[LoginController::class,'logoutUser']);



Route::resource('programs',ProgramController::class);
