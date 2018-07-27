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

Route::get('/places/create', 'PlacesController@CreatePlace');
Route::post('/places/create', 'PlacesController@uploadFormCreatePlace');

Route::get('places/{id}', 'PlacesController@show')->where('id', '[0-9]+');

Route::get('/places/{id}/photos/add', 'PlacesController@AddPhoto')->where('id', '[0-9]+');
Route::post('/places/{id}/photos/add', 'PlacesController@uploadFormAddPhoto')->where('id', '[0-9]+');
