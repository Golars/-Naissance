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
		dd('This is the VergoBase module index page.');
	});
	Route::get('/test', ['uses' => 'Controller@index']);
	Route::group(['prefix' => 'auth'], function() {
		Route::any('/signup','UserController@signup');
		Route::any('/login','UserController@login');
		Route::any('/getAllUser','UserController@getAllUser');
	});
});