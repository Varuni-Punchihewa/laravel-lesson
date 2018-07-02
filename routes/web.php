<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Register Routes
Route::get('/register', 'HomeController@register');
Route::post('/register_post', 'HomeController@register_post');

// Login Routes
Route::get('/login', 'LoginController@login');
Route::post('/login_post', 'LoginController@login_post');

Route::middleware('myAuth')->group(function () {
	// Home Route
	Route::get('/home', 'HomeController@home');

	// Update User
	Route::get('/user_update/{id}', 'UserController@user_update');
	Route::post('/user_update_post/{id}', 'UserController@user_update_post');
	
	Route::get('/logout', 'LoginController@logout');
});