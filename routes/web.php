<?php

use Illuminate\Support\Facades\Route;


Route::get('/register', function {
    return view('register_form');
})


// here define register routes for post 

