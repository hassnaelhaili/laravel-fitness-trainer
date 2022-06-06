<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Session;


class loginController extends Controller
{

    // when user enter / we check if logged in we show index page else we redirect him to login page
    public function index(){

        if (auth()->check()) {

             return view('home');

            }

        return redirect()->to('/login');

    }

    //when receive get request
    public function login(){

        return view('login');
    }
    
    // post request
    public function loginUser(Request $request){


        $user = User::where('email','=',$request->email)
                ->where('password','=', $request->password)
                ->first();

        if ($user) {

            auth()->login($user);
            return redirect()->to('/'); 
            }     

        return redirect()->to('/login');    

    }

    public function logoutUser(){

        auth()->logout();
    
        return redirect()->to('/login');
    }


}

