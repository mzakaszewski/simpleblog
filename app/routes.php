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

Route::get('/', ['as' => 'blog.index', 'uses' => 'BlogController@index']);
Route::get('post/{slug}', ['as' => 'blog.viewpost', 'uses' => 'BlogController@singlePost']);

Route::get("login", ["as" => "login", "uses" => "SessionsController@create"]);
Route::post("login", ["as" => "login", "uses" => "SessionsController@store"]);
Route::get("logout", ["as" => "logout",	"uses" => "SessionsController@destroy"]);

Route::group(array("before" => "auth"), function() {

	Route::get('admin', ['as' => 'admin.index', 'uses' => 'AdminController@index']);

	Route::get('admin/post/create', ['as' => 'admin.post.create', 'uses' => 'AdminController@createPost']);
	Route::post('admin/post/create', ['as' => 'admin.post.store', 'uses' => 'AdminController@storePost']);

	Route::get('admin/post/edit/{slug}', ['as' => 'admin.post.edit', 'uses' => 'AdminController@editPost']);
	Route::post('admin/post/edit/{slug}', ['as' => 'admin.post.update', 'uses' => 'AdminController@updatePost']);

	Route::get('admin/post/delete/{slug}', ['as' => 'admin.post.delete', 'uses' => 'AdminController@deletePost']);

});