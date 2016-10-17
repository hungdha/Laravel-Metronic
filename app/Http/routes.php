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
Route::get('user/{username}/edit', 'Auth\UserController@update');
Route::get('admin/dashboard', 'DashboardController@index');
Route::get('admin', "Admin\ProductController@index");
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

Route::get('lockscreen', 'LockScreenController@get');
Route::post('lockscreen', 'LockScreenController@post');
Route::resource('admin/product', 'Admin\ProductController');
Route::post('admin/product/products', "Admin\ProductController@products");
/*
Route::get('admin/product/manage', "Admin\ProductController@index");
Route::get('admin/product/create', "Admin\ProductController@create");
Route::get('admin/product/{id}/edit', "Admin\ProductController@edit");
Route::get('admin/product/{id}', "Admin\ProductController@destroy");

Route::post('admin/product/store', "Admin\ProductController@store");
Route::post('admin/product/update/{id}', "Admin\ProductController@update");
// ajax
Route::post('admin/product/products', "Admin\ProductController@products");
*/