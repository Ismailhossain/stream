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

Route::get('/', function () {
    return View('layouts.master');
});

Auth::routes();

Route::get('/home', 'HomeController@index');



// Task


Route::get('task/create', array('uses' => 'TaskController@create'));
Route::post('task/store', array('uses' => 'TaskController@store'));
Route::get('task/show', array('uses' => 'TaskController@show'));
Route::get('task/edit/{id}', array('uses' => 'TaskController@edit'));
Route::post('task/update', array('uses' => 'TaskController@update'));
Route::get('task/destroy/{id}', array('uses' => 'TaskController@destroy'));





// Sub Task


Route::get('sub_task/create', array('uses' => 'SubtaskController@create'));
Route::post('sub_task/store', array('uses' => 'SubtaskController@store'));
Route::get('sub_task/show', array('uses' => 'SubtaskController@show'));
Route::get('sub_task/edit/{id}', array('uses' => 'SubtaskController@edit'));
Route::post('sub_task/update', array('uses' => 'SubtaskController@update'));
Route::get('sub_task/destroy/{id}', array('uses' => 'SubtaskController@destroy'));