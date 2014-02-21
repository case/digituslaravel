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

Route::get('/', 'HomeController@getIndex');

// Route::controller('users', 'UsersController');

	/*
	|-----------------------------------------------------------------------
	| User Profile Stuff
	|-----------------------------------------------------------------------
	*/

Route::get('profile/dashboard', 'UserProfileController@getDashboard');
Route::post('profile/dashboard', 'UserProfileController@postDashboard');

Route::get('profile/messages', 'UserProfileController@getMessages');
Route::post('profile/messages', 'UserProfileController@postMessages');

Route::get('profile/settings', 'UserProfileController@getProfile');
Route::put('profile/settings/edit', 'UserProfileController@updateProfile');

Route::get('profile/plan', 'UserProfileController@getPlan');
Route::post('profile/plan', 'UserProfileController@updatePlan');

	/*
	|-----------------------------------------------------------------------
	| Login / Logout & Dashboard
	|-----------------------------------------------------------------------
	*/

Route::get('register', 'UsersController@getRegister');
Route::post('users/create', 'UsersController@postRegister');

Route::get('login', 'UsersController@getLogin');
Route::post('users/signin', 'UsersController@postLogin');

Route::get('logout', 'UsersController@getLogout');



	/*
	|-----------------------------------------------------------------------
	| Filters
	|-----------------------------------------------------------------------
	*/

