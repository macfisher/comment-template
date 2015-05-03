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

Route::get('/', function()
{
	return View::make('index');
});

//API ROUTES
Route::group(array('prefix' => 'api'), function() {
	//Angular will handle 'create' and 'edit' routes
	//user cannot access api/create or 'edit' when nothing there
	Route::resource('comments', 'CommentController',
		array('only' => array('index', 'store', 'destroy')));
});


//CATCH ALL ROUTE
//all routes that are not home or api will redirect to front-end
//this allows Angular to route them
App::missing(function($exception) {
	return View::make('index');
});
