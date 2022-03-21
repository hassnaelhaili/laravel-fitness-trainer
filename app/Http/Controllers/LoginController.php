<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(Request $request){

        $user = User::where('email',$request->email)->where('password', $request->password)->first();


        if (!$user){
            return 'invalid email or password ';
        }


        auth()->login($user);

        return redirect()->route('clients_index');

    }

    public function register(Request $request){
        $exist = User::where('email',$request->request_email)->first();
         if ($exist){
            return 'this email already exist';
         }

         if ($request->request_password != $request->request_confirm_password){
             return "password doesn't match";
         }

         $user = new User();
         $user->name = $request->request_name;
         $user->email = $request->request_email;
         $user->password = $request->request_password;
         $user->save();

         return redirect()->route('login_form');
    }

    public function logout(){
        auth()->logout();
        return redirect()->route('login_form');
    }

    public function getRegister(){
        return view('user.register');
    }
    public function getLogin(){
        return view('user.login');
    }




}
