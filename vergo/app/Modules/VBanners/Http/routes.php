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

Route::group(['prefix' => 'v_banners'], function() {
	Route::get('/', function() {
		dd('This is the VBanners module index page.');
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