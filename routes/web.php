<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\RegisterController;


Route::get('/register', function() {
    return view('register_form');
});


// here define register routes for post 
Route::post('/register-post',[RegisterController::class,'postRegister']);
