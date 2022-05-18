<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Session;


class loginController extends Controller
{


    public function index()
    {
            if (auth()->check()) {
             return view('home');
            }

        return view('login');

    }
    

public function loginUser(Request $request){


        $user = User::where('email','=',$request->email)
                ->where('password','=', $request->password)
                ->first();

           if ($user) {
            auth()->login($user);
                }     

                            return view('home');

        

    }

    public function home(){
 

             return view('home');


     
    }

    public function logoutUser(){
        auth()->logout();
         return view('home');

    }


}

