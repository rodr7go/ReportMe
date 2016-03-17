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
    return view('index');
});

Route::resource('users', 'UsersController');
Route::get('users/{users}/delete', [ 'as' => 'users.delete', 'uses' => 'UsersController@destroy' ]);

Route::resource('buildings', 'BuildingsController');
Route::get('buildings/{buildings}/delete', [ 'as' => 'buildings.delete', 'uses' => 'BuildingsController@destroy' ]);
Route::get('reports/admin', [ 'as' => 'reports.admin.index', 'uses' => 'ReportsController@adminIndex' ]);
Route::resource('reports', 'ReportsController');
Route::get('reports/{reports}/delete', [ 'as' => 'reports.delete', 'uses' => 'ReportsController@destroy' ]);
