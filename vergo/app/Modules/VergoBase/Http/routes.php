<?php

/*
|--------------------------------------------------------------------------
| Module Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for the module.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::group(['prefix' => '/'], function() {
	Route::get('/vergo', function() {
		return view('vergo_base::welcome');
	});
	Route::group(['prefix' => 'auth'], function() {
		Route::any('/signup','UserController@signup');
		Route::any('/login','UserController@login');
	});

	Route::group(['prefix' => 'pages'], function() {
		Route::get('/','StaticPagesController@index');
		Route::get('/show/{id}','StaticPagesController@page');
		Route::any('/add','StaticPagesController@add');
	});
});