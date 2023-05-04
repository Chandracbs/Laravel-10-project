<?php

namespace App\Http\Controllers;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Models\Authen;
use App\Models\User;
use Illuminate\Http\Request;

// Extra Command use
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register(){

        return view('auth.register');
    }

    public function register_submit(Request $request){
        // dd($request->input());
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:6|max:32',
            'retype_password'=>'required|same:password'
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->status=1;
        $user->save();

        return redirect()->route('login')->with('success','You have created an account successfully'); 

    }

    public function login(){
        return view('auth.login');
    }

    public function login_submit(Request $request){
        $request->validate([
            'email'=>'required',
            'password'=>'required'
        ]);

        $credentials = [
            'email'=>$request->email,
            'password'=>$request->password
        ];

        if(Auth::guard('web')->attempt($credentials)){
            return redirect()->route('dashboard');
        }
        else{
            return redirect()->route('login')->with('Failed',"Wrong Email/Password!");
        }
    }

    public function logout(){
        Auth::guard('web')->logout();
        return redirect()->route('login');
    }
    
    public function dashboard(){
        return view('blog.master');
    }
}
