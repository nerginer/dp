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

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');

Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('dps', 'DpController@index');

Route::get('dps/create', 'CreateController@dp_create');

Route::get('dps/{dp}', 'DpController@show');

Route::get('dps/tags/{tag}', 'DpController@tag');

Route::get('q', 'DpController@search');

Route::post('dps/sendForm', 'DpController@sendForm');


Route::get('licence', 'DpController@licence');

Route::get('message', 'DpController@message');