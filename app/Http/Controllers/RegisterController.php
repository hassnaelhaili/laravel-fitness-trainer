<?php


namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;



class RegisterController extends Controller {

public function r(){
    return view('register_form');
}

	//define here function for post register

public function registration(Request $request)
{

 $user = new User();

 $user->full_name       =$request->full_name;
 $user->email           =$request->e_mail;
 $user->password        =$request->password;
 $user->phone           =$request->phone;
 $user->profile_picture = $request->profile_picture;
 $user->job_title       =$request->job_title;
 $user->gender          =$request->gender;
 $user->city            =$request->city;
 $user->country         =$request->country;
 $user->bio             =$request->bio;
 $user->save();

 if($user){
         return back()->with('success','you have registered successfuly');
    }else{
        return back()->with('fail','something wrong');
    
 
}

}
}