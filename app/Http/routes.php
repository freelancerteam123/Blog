<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Admin Router

Route::group(['prefix' => 'admin'], function () {
	Route::group(['middleware' => 'admin'], function () {
		Route::get('/', ['as' => 'admin.home', 'uses' => 'Admin\HomeController@index']);
		Route::get('/list', ['as' => 'admin.list', 'uses' => 'Admin\AdminController@showList']);
		Route::get('/add', ['as' => 'admin.add', 'uses' => 'Admin\AdminController@showAdd']);
		Route::post('/add', ['as' => 'admin.add.action', 'uses' => 'Admin\AdminController@actionAdd']);
		Route::post('/delete', ['as' => 'admin.delete', 'uses' => 'Admin\AdminController@actionDelete']);
		Route::get('/search', ['as' => 'admin.search', 'uses' => 'Admin\AdminController@actionSearch']);
	});

    Route::get('/login', ['as' => 'admin.login.show', 'uses' => 'Admin\AuthController@showLogin']);
    Route::post('/login', ['as' => 'admin.login.action', 'uses' => 'Admin\AuthController@actionLogin']);
    Route::get('/test', 'Admin\AuthController@createUser');
});
