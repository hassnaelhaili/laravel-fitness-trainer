<?php


namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;


class RegisterController extends Controller {



      public function register()
    {
        return view('register_form');
    }
        public function registration()
    {
        return view("registration");
    }

      public function registerUser(Request $request)
    {
           $request-> validate([
            'name'=>'required',
            'email'=>'required|email |unique:users',
            'password'=>'required|min:5|max:15',
        ]);
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $res = $user->save();
        if($res){
            return back()->with('success','you have registered successfuly');
        }else{
            return back()->with('fail','something wrong');
        }
    }
public function loginUser(Request $request){
         $request-> validate([
            'email'=>'required|email',
            'password'=>'required|min:5|max:15'
        ]);
        $user = User::where('email','=',$request->email)->first();
        if($user){
            if(Hash::check($request->password, $user->password)) {
                $request->session()->put('loginId', $user->id);
                return redirect('dashboard');
            }else{
                return back()->with('fail','password not matches.');
            }
        }else{
            return back()->with('fail','this email is not registered.');
        }
    }
    public function dashboard()
    {
        if(!Session::has('loginId')){
            return back()->with('fail','you must be logged in .');

        }
         
        $data = User::where('id','=', Session::get('loginId'))->first();
        
        return view('auth.dashboard',compact('data'));
    }
    public function logout()
    {
        if(Session::has('loginId')) {
            Session::pull('loginId');
            return redirect('login');
        }
    }
}
