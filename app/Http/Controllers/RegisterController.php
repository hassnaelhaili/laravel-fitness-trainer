<?php


namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;


class RegisterController extends Controller {



      public function register()
    {
        return view('register_form');
    }
    
    public function postRegister(Request $request)
    {
           $request-> validate([
            'name'=>'required',
            'email'=>'required|email |unique:users',
            'password'=>'required|min:5|max:15'
        ]);
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $res = $user->save();
        if($res){
            return back()->with('you are registerd');
        }else{
            return back()->with('kayna chihja');
        }
    }
    
    }
    

	//define here function for post register

