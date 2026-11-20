<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login_form(){
        return view('shop.pages.login') ;
    }

    public function login_check(Request $request){

        if(Auth::guard('web')->attempt($request->except('_token'))){

            return to_route('shop.index') ;

        }else{

            return to_route('user.login.form') ;


        }
    }

    public function logout(){
        Auth::logout();
        return to_route('user.login.form') ;

    }
}
