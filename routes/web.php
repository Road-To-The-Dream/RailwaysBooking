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
    return view('welcome');
});

Auth::routes();

Route::get('/trips', 'BookingController@index');

Route::get('/cities', 'BookingController@getAllCities');

Route::post('/routes', 'BookingController@getAllRoutes');

Route::post('/train', 'BookingController@getCarriagesByTrain');

Route::post('/carriage', 'BookingController@getPlacesByCarriage');

Route::post('/place-form', 'BookingController@showPlaceForm');
