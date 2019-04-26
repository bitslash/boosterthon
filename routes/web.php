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

Route::get('/', 'ReviewsController@index');
Route::get('/rate', 'ReviewsController@rate');
Route::post('/rate', 'ReviewsController@save');
Route::get('/list/{id}', 'ReviewsController@list');
Route::get('/autocomplete', 'SearchController@autocomplete');

