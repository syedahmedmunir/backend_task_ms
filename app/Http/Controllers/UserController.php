<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\User;

class UserController extends Controller
{
    public function store(Request $request){

        $request->validate([
            'register_email' =>'required|unique:users,email'
        ]);

        $first_name               = $request->register_firstname;
        $lastname                   = $request->register_lastname;
        $country_id               = $request->country_id;
        $register_email           = $request->register_email;
        $register_password        = $request->register_password;
        $register_repeatPassword  = $request->register_repeatPassword;
        $cc                       = $request->cc;

        if($register_password !=  $register_repeatPassword){

            return redirect()->back()->with('error',"Passwords Doesnt Match");
        }

        DB::beginTransaction();

        $user_create                = new User();
        $user_create->first_name    =  $first_name;
        $user_create->last_name     =  $lastname;
        $user_create->name          =  "$first_name $lastname";
        $user_create->email         =  $register_email;
        $user_create->country_id    =  $country_id;
        $user_create->password      =  md5($register_password);
        $user_create->status        =  'A';
        $user_create->save();

        DB::commit();

        return redirect()->back()->with('success',"User Created Successfully. Kindly Login To Continue");
    }
}
