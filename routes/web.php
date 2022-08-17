<?php

Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index');
Route::get('/home/index', 'HomeController@index');
Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');