<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'TaskController@index');
Route::get('/task', 'TaskController@index');


Route::get('/tasks/create', 'TaskController@index');
//Route::post('/tasks/create', 'TaskController@store');