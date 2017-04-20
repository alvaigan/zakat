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

Route::auth();
Route::group(['middleware' => 'auth'], function() {
  Route::get('/', 'Dashboard@index');
  Route::get('/uang', 'AdminController@index');
  Route::get('/uang/tambah', 'AdminController@create');
  Route::post('/uang/add', 'AdminController@store');

  Route::get('/uang/{id}/edit', 'AdminController@edit');
  Route::patch('/uang/{id}/edit', 'AdminController@update');
  Route::delete('/uang/{id}/delete', 'AdminController@destroy');

  Route::get('/beras', 'AdminBeras@index');
  Route::get('/beras/tambah', 'AdminBeras@create');
  Route::post('/beras/add', 'AdminBeras@store');

  Route::get('/beras/{id}/edit', 'AdminBeras@edit');
  Route::patch('/beras/{id}/edit', 'AdminBeras@update');
  Route::delete('/beras/{id}/delete', 'AdminBeras@destroy');

  Route::get('/tentang', 'Dashboard@tentang');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
