<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use DB;
use App\Http\Requests;
use Toastr;

class SigninController extends Controller
{
    public function signin(Request $request){
        $email=$request->email;
        $password=$request->password;
        $password1=md5($request->password);
        $result=DB::table('users')
                ->where('email',$email)
                ->where('password',$password1)
                ->first();
        
        if($result){
            Toastr::success('Logged In!!', 'Log In', ["positionClass" => "toast-top-right"]);
            return view('welcome'); 
        }
        else{
            Toastr::error('Wrong Credentials!!', 'Log In', ["positionClass" => "toast-top-right"]);
            return view('welcome'); 
        }

        
    }
}
