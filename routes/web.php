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

Route::get('/', 'AdminController@index');
Route::get('/uang/tambah', 'AdminController@create');
Route::post('/uang/add', 'AdminController@store');

Route::get('/uang/{id}/tambah', 'AdminController@edit');
Route::patch('/uang/{id}/tambah', 'AdminController@update');
