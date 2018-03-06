<?php

namespace App\Http\Controllers;
use Auth;

use Illuminate\Http\Request;

class Admin extends Controller
{
    public function login_get(){

    	return view('admin_login');
    }

    public function login_post(){

    	$remember = request()->has('remember')?true:false;

    	if(Auth::guard('webadmin')->attempt(['email'=>request('email'), 'password'=>request('password')] ,  $remember)){
    		return redirect('admin/path');
    	}else{
    		return back();
    	}
    	
    }
}
