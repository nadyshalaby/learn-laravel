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

Route::get('/show', 'DBController@show');
Route::get('/create', 'DBController@create');
Route::get('/edit', 'DBController@edit');
Route::get('/remove', 'DBController@remove');
