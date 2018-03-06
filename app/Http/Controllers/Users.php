<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Hash;

class Users extends Controller
{
    public function login_get(){
    	return view('index');
    }

    public function login_post(Request $request){

    	$email = $request->email;
        $password = $request->password;

        $validation = valdiator($request->all(), [
            'email' => 'email|unique:users',
            'password' => 'requried|string|nullable '
        ]);

        $user = User::where('email', $email)->first();

        if (!$user) {
            return back();
        }

        if (Hash::check($password, $user->password)) {
            return view('welcome');
        }

        auth()->login($user);

        // get logged in user
        //return auth()->user();

        
        return back();
    	
    }



    public function register(){


        return view('reg');

    }

    public function insert_data(Request $request){

        $validation = validator($request->all(), [
            'password'=>'required|confirmed',
            'name' => 'required',
            'email' => 'required|unique:users',
        ]);

        if ($validation->fails()) {
            
            return back()->withInput($request->all())->withErrors($validation);
        }


        $user = User::forceCreate([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => bcrypt($request->password),
        ]);

        auth()->login($user);


        // $add = new User;
        // $add->name = request('name');
        // $add->email = request('email');
        // $add->phone = request('phone');
        // $add->password = bcrypt(request('password'));
        // $add->save();
      
        
    }
}
