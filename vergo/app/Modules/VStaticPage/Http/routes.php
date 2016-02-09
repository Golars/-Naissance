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

Route::group(['prefix' => 'vsp'], function() {
	Route::get('/', function() {
		return view('v_static_page::welcome');
	});

	Route::group(['prefix' => 'pages'], function() {
		Route::get('/','StaticPagesController@index');
		Route::get('/show/{id}','StaticPagesController@getOne');
		Route::get('/add','StaticPagesController@add');
		Route::post('/add','StaticPagesController@add');
		Route::get('/edit/{id}','StaticPagesController@edit');
		Route::post('/edit/{id}','StaticPagesController@edit');
	});
});