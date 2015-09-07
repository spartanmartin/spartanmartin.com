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

/*
| SPARTAN MARTIN
|
|	/
|	/resume
|	/treehouse
|	/projects
|		/health
|		/meals
|		/exercise
|		/medications
|		/sleep
|		/reminders
|	/portfolio
|	/blog
|	/contact
*/

Route::get('/', 'PagesController@index');
//Route::get('services', 'PagesController@services');
Route::get('resume', 'PagesController@resume');
//Route::get('projects', 'PagesController@projects');
//Route::get('portfolio', 'PagesController@portfolio');
Route::get('contact/{contact?}', 'PagesController@contact');

/*
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function()
{

	Route::resource('/', 'AdminController@index');
	Route::resource('users/{id?}', 'AdminController@index');
	Route::resource('menus/{id?}', 'AdminController@index');
	Route::resource('resume', 'AdminController@resume');
	Route::resource('projects/{name?}', 'AdminController@projects');
	Route::resource('portfolio', 'AdminController@portfolio');

});
*/