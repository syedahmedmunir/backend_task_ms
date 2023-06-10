<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
class LoginController extends Controller
{
     public function login(){

      if (auth()->check()) {
            return redirect()->route('job.index');
      } 
      
      else {
         return view('login.index');
      }

     }

     public function login_attempt(Request $request){

        // Custom Authentication 
        // As Given Php Core Project Authentication was MD5
        // Laravel Default Support is Bcrypt
        // Previous Core Users Could Face Login Issues as Saved Passwords were in MD5

        $email       = $request->login_email;
        $password    = $request->login_password;

        $login_array  = ['email'=> $email, 'password'=> md5($password) ];
        $user_attempt = User::where($login_array)->first();

        if ($user_attempt) {
            auth()->login($user_attempt);
            return redirect()->route('job.index');

        } else {
            return redirect()->route('login')->with('error', 'Invalid credentials');
        }

     }

     public function logout(){
        auth()->logout();
        session()->flush();
        return redirect()->route('login')->with('success', 'Logout Successfully');
     }
}
