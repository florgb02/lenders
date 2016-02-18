<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});



/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web', 'auth'] ], function () {
    
    Route::get('clients', 'ClientController@index');
    Route::get('clients/{id}', 'ClientController@show');


	// Authentication routes...
	Route::get('signin', 'Auth\AuthController@getLogin');
	Route::post('signin', 'Auth\AuthController@postLogin');
	Route::get('signout', 'Auth\AuthController@getLogout');

	// Registration routes...
	Route::get('signup', 'Auth\AuthController@getRegister');
	Route::post('signup', 'Auth\AuthController@postRegister');
});

/* Middelware to filter Access to the CMS only login users*/
