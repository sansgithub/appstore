<?php

Route::group(['middleware' => ['web']], function () {
	
	Route::get('/', function () {
    	return view('welcome');
	})->name('home');

	Route::get('/login',[
		'uses'	=> 'UserController@getSignIn',
		'as'	=> 'login'
	]);

	Route::get('/signup',[
		'uses'	=> 'UserController@getSignUp',
		'as'	=> 'signup'
	]);

	Route::post('/login-attempt',[
		'uses'	=> 'UserController@postSignIn',
		'as'	=> 'attempt'
	]);

	Route::get('/dashboard',[
    	'uses'			=> 'UserController@getDashboard',
    	'as'			=> 'dashboard',
    	'middleware'	=> 'auth'
   	]);

   	Route::post('/signup-attempt',[
   		'uses'	=> 'UserController@postSignUp',
   		'as'	=> 'signup-attempt'
   	]);

   	Route::get('/logout',[
      'uses'  => 'UserController@getLogout',
      'as'    => 'logout'
      
    ]);

    Route::get('/user-board',[
    	'uses'	=> 'UserController@getUser',
    	'as' 	=> 'user-board'
    ]);

});


