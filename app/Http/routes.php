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

Route::get('/', 'PagesController@home');
Route::get('wtf', 'PagesController@wtf');

Route::get('profile', array('as' => 'profile', function()
    {
        return View::make('profile/profile');
    }));
	
Route::get('contacts', array('as' => 'contacts', function()
    {

        return View::make('contacts');
    }));
	
Route::get('services', array('as' => 'services', function()
    {
        return View::make('services');
    }));

Route::get('artists', array('as' => 'artists', function()
    {
        return View::make('artists');
    }));
	
Route::get('files', array('as' => 'files', function()
    {
        return View::make('files');
    }));
	
Route::get('calendar', array('as' => 'calendar', function()
    {
        return View::make('calendar');
    }));

Route::get('community', array('as' => 'community', function()
    {
        return View::make('community');
    }));
	
Route::get('groups', array('as' => 'groups', function()
    {
        return View::make('groups');
    }));
	
Route::get('reports', array('as' => 'reports', function()
    {
        return View::make('reports');
    }));
	
Route::get('gigs', array('as' => 'gigs', function()
    {
        return View::make('gigs');
    }));
	

/*
|--------------------------------------------------------------------------
| API routes
|--------------------------------------------------------------------------
*/

Route::group(['prefix' => 'api', 'namespace' => 'API'], function () {
    Route::group(['prefix' => 'v1'], function () {
        require config('infyom.laravel_generator.path.api_routes');
    });
});

Route::get('login', 'Auth\AuthController@getLogin');
Route::post('login', 'Auth\AuthController@postLogin');
Route::get('logout', 'Auth\AuthController@logout');

// Registration Routes...
Route::get('register', 'Auth\AuthController@getRegister');
Route::post('register', 'Auth\AuthController@postRegister');

// Password Reset Routes...
Route::get('password/reset', 'Auth\PasswordController@getEmail');
Route::post('password/email', 'Auth\PasswordController@postEmail');
Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('password/reset', 'Auth\PasswordController@postReset');

Route::get('/home', 'HomeController@index');