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

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');
Route::get('user/{username}/profile', 'Auth\UserController@profile');
Route::any('user/{username}/edit', 'Auth\UserController@update');
Route::any('admin/dashboard', 'DashboardController@index');
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController'
]);


/*
Route::get('category/{categoryid}/action/edit', "Admin\CategoryController@updateCat");
Route::post('category/{categoryid}/action/edit', "Admin\CategoryController@updateCat");

Route::post('category/action/add', "Admin\CategoryController@insertCat");
*/
Route::get('category/index', "Admin\CategoryController@index");
Route::get('category/create', "Admin\CategoryController@create");
Route::post('category/store', "Admin\CategoryController@store");
Route::get('category/edit', "Admin\CategoryController@edit");
Route::post('category/update', "Admin\CategoryController@update");

Route::get('admin/product/management', "Admin\ProductController@index");
Route::get('admin/product/edit/{id}', "Admin\ProductController@edit");
Route::post('admin/product/products', "Admin\ProductController@products");