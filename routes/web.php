<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'TaskController@index');

Route::get('task/{id}','TaskController@show');

Route::post('store','TaskController@store');
Route::delete('delete/{id}','TaskController@destroy');
 Route::patch('update/{id}','TaskController@update');
 Route::put('edit/{id}','Taskcontroller@edit');