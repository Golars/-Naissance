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
		Route::get('/show/{id}','StaticPagesController@getOne');
		Route::get('/add','StaticPagesController@add');
		Route::post('/add','StaticPagesController@add');
		Route::get('/edit/{id}','StaticPagesController@edit');
		Route::post('/edit/{id}','StaticPagesController@edit');
	});

	Route::group(['prefix' => 'banners'], function() {
		Route::get('/','BannerController@index');
		Route::get('/show/{id}','BannerController@getOne');
		Route::get('/add','BannerController@add');
		Route::post('/add','BannerController@add');
		Route::get('/edit/{id}','BannerController@edit');
		Route::post('/edit/{id}','BannerController@edit');
	});
});