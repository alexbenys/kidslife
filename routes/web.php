<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/


Route::get('/', [
    'as' => 'home',
    'uses' => 'PagesController@index'
]);

Route::get('/login', [
    'as' => 'login',
    'uses' => 'PagesController@getLogin'
]);


Route::get('/availability', [
    'as' => 'availability',
    'uses' => 'PagesController@getAvailabilityPage'
]);


Auth::routes();

Route::get('/home', 'HomeController@index');
