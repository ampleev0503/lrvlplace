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


Route::get('/', 'PlacesController@index')->name('main');

Route::group(['prefix' => 'places'], function () {

    Route::get('', 'PlacesController@showAll')->name('showAllPlaces')->middleware('place');

    Route::get('create', 'PlacesController@createPlace')->name('createPlace');
    Route::post('create', 'PlacesController@uploadFormCreatePlace')->name('uploadFormCreatePlace');;

    Route::get('{id}', 'PlacesController@show')->name('showPlace')->where('id', '[0-9]+');

    Route::get('photos/add', 'PhotosController@addPhoto')->name('addPhoto')->middleware('place');
    Route::post('photos/add', 'PhotosController@uploadFormAddPhoto')->name('uploadFormAddPhoto');

});







