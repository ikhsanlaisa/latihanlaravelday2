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

Route::get('/home', 'HomeController@index')->name('home');

Route:: get('/homestay', 'HomestayController@index');
Route:: post('/homestaypost', 'insHomestayController@store');
Route:: get('/inshomestay', 'insHomestayController@index');
Route:: get('/edit/{id}', 'insHomestayController@edit');
Route:: put('/editok/{id}', 'insHomestayController@update');
Route:: delete('/delete/{id}', 'insHomestayController@destroy');

