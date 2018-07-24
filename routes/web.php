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
    return redirect('/places');
});

Route::get('/places', 'PlacesController@index');

Route::get('/places/create', 'PlacesController@getCreate');
Route::post('/places/create', 'PlacesController@postCreate');

Route::get('places/{id}', 'PlacesController@show')->where('id', '[0-9]+');

Route::get('/places/{id}/photos/add', 'PlacesController@getAddPhoto')->where('id', '[0-9]+');
Route::post('/places/{id}/photos/add', 'PlacesController@postAddPhoto')->where('id', '[0-9]+');
