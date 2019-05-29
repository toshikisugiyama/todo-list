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

Route::get('/', 'TaskController@index');
Route::post('/tasks', 'TaskController@create');
Route::delete('/tasks/{task}', 'TaskController@destroy');
Route::get('/done/{task}', 'TaskController@done');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
