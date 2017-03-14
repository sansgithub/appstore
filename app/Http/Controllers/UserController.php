<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\App;

use App\Http\Requests;

class UserController extends Controller
{

	public function getSignIn(){
    	return view('login');
    }

    public function getSignUp(){
    	return view('signup');
    }

    public function postSignIn(Request $request){
    	
    	$this->validate($request,[
    		'email' 	=> 'required',
    		'password'	=> 'required'
    	]);

    	if(Auth::attempt([
    			'email'      => $request['email'],
    			'password'   => $request['password'],
                'approval'   => 1,
                'user_type'  => 'user'
    		])){
                
    			 //return redirect()->route('dashboard');
        return redirect()->route('user-board');
    	}

    	return redirect()->back();

    }

    public function getDashboard(){
    	return view('admin-dashboard');
    }

    public function getUser(){
        return view('user-board');
    }

    public function getLogout(){
        Auth::logout();
        return redirect()->route('home');
    }



}
