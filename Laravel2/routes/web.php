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

Route:: get('/lihatdata', 'HomestayController@index');
Route:: get('/inshomestay', 'HomestayController@create');
Route:: get('/edithomestays/{id}', 'HomestayController@edit');
Route:: get('/editRoles/{id}', 'RoleController@edit');
Route:: get('/tambahrole', 'RoleController@create');
Route:: get('/lihatrole', 'RoleController@index');


Route:: post('/rolepost', 'RoleController@store');
Route:: post('/homestaypost', 'HomestayController@store');


Route:: put('/edithomestay/{id}', 'HomestayController@update');
Route:: put('/editrole/{id}', 'RoleController@update');


Route:: delete('/deleteHomestay/{id}', 'HomestayController@destroy');
Route:: delete('/deleteRole/{id}', 'RoleController@destroy');

