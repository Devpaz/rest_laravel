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

Route::group(['prefix'=>'api'], function()
{
	Route::group([ 'prefix'=>'user'], function()
	{
		Route::get('/', function()
		{
			return 'Lista de Usuarios';
		});
		Route::get('/{id}', function($id)
		{
			return 'Devolver usuario'. $id;
		});
		Route::post('/crear', function()
		{
			return 'crear un nuevo usuario';
		});
		
	});
});





//Route::get('/', function()
//{
//	return View::make('hello');
//});
