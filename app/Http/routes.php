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
		Route::post('/delete', ['as' => 'admin.change.status', 'uses' => 'Admin\AdminController@actionChangeStatus']);
		Route::get('/search', ['as' => 'admin.search', 'uses' => 'Admin\AdminController@actionSearch']);

		Route::group(['prefix' => 'restaurant'], function () {
			Route::get('/add', ['as' => 'admin.restaurant.add', 'uses' => 'Admin\RestaurantController@showAdd']);
		});

		Route::group(['prefix' => 'supplier'], function () {
			Route::get('/list', ['as' => 'admin.supplier.list', 'uses' => 'Admin\SupplierController@showList']);
			Route::get('/add', ['as' => 'admin.supplier.add', 'uses' => 'Admin\SupplierController@showAdd']);
		});

		Route::group(['prefix' => 'type'], function () {
			Route::get('/list', ['as' => 'admin.type.list', 'uses' => 'Admin\TypeController@showList']);
			Route::get('/add', ['as' => 'admin.type.add', 'uses' => 'Admin\TypeController@showAdd']);
		});
	});

    Route::get('/login', ['as' => 'admin.login.show', 'uses' => 'Admin\AuthController@showLogin']);
    Route::post('/login', ['as' => 'admin.login.action', 'uses' => 'Admin\AuthController@actionLogin']);
    Route::get('/logout',  ['as' => 'admin.logout', 'uses' => 'Admin\AuthController@actionLogout']);
});