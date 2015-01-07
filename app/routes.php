<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'BlogController@index');

Route::get('post/{slug}', 'BlogController@singlePost');

Route::get('backstage/login', 'SessionsController@create');
Route::post('backstage/login', 'SessionsController@store');
Route::get('backstage/logout', 'SessionsController@destroy');