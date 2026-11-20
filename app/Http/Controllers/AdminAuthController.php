<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminAuthController extends Controller
{
    public function view_form(){

    return view('dashborad.pages.login.login') ;

    }
    public function check(Request $request){

    if(Auth::guard('dash')->attempt($request->except('_token'))){

        return to_route('dashborad.index') ;
    }else{
        return to_route('login.form') ;


    }

    }
    public function logout(){
        Auth::guard('dash')->logout();
        return to_route('login.form') ;

    }

}
