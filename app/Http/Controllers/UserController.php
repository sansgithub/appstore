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
                'approval'   => 1
    		])){
                if(Auth::user()->user_type == 'user'){
    			 return redirect()->route('user-board');
                }
                return redirect()->route('dashboard');
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

    public function postSignUp(Request $request){
        
        $this->validate($request,[
            'email'         => 'required|email|unique:users',
            'first_name'    => 'required|alpha|max:120',
            'last_name'     => 'required|alpha|max:120',            
            'password'      => 'required|min:8',
            're_password'   => 'required|same:password',
            'user_type'     => 'required'
        ]);

        $email=$request['email'];
        $first_name=$request['first_name'];
        $last_name=$request['last_name'];        
        $password=bcrypt($request['password']);
        $user_type=$request['user_type'];

        $user=new User();
        $user->email=$email;
        $user->first_name=$first_name;
        $user->last_name=$last_name;
        $user->user_type=$user_type;
        $user->password=$password;
        /*echo $user->email.''.$user->first_name
        .''.$user->last_name.''.$user->user_type;*/
        $user->save();
        return redirect()->route('home')->with(['message'=>'Thank you for signing up.You can login once you are approved!']);
    }

}
