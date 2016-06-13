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
// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');


Route::group(['middleware' => 'auth'], function(){

	Route::get('/', function () {
	    return redirect()->route('reports.index');
	});

	Route::resource('users', 'UsersController');
	Route::get('users/{users}/delete', [ 'as' => 'users.delete', 'uses' => 'UsersController@destroy' ]);

	Route::resource('buildings', 'BuildingsController');
	Route::get('buildings/{buildings}/delete', [ 'as' => 'buildings.delete', 'uses' => 'BuildingsController@destroy' ]);

	Route::get('reports/{reports}/response', [ 'as' => 'reports.response', 'uses' => 'ReportsController@response' ]);
	Route::post('reports/{reports}/response', [ 'as' => 'reports.response', 'uses' => 'ReportsController@saveResponse' ]);

	Route::resource('reports', 'ReportsController');
	Route::get('reports/{reports}/delete', [ 'as' => 'reports.delete', 'uses' => 'ReportsController@destroy' ]);

	Route::resource('roles', 'RolesController');
	Route::get('roles/{roles}/delete', [ 'as' => 'roles.delete', 'uses' => 'RolesController@destroy' ]);

});