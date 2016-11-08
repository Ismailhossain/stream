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




// Parent Task


Route::get('parent_task/create', array('uses' => 'ParenttaskController@create'));
Route::post('parent_task/store', array('uses' => 'ParenttaskController@store'));
Route::get('parent_task/show', array('uses' => 'ParenttaskController@show'));
Route::get('parent_task/edit/{id}', array('uses' => 'ParenttaskController@edit'));
Route::post('parent_task/update', array('uses' => 'ParenttaskController@update'));
Route::get('parent_task/destroy/{id}', array('uses' => 'ParenttaskController@destroy'));


// Task


Route::get('task/create', array('uses' => 'TaskController@create'));
Route::post('task/store', array('uses' => 'TaskController@store'));
Route::get('task/show', array('uses' => 'TaskController@show'));
Route::get('task/edit/{id}', array('uses' => 'TaskController@edit'));
Route::post('task/update', array('uses' => 'TaskController@update'));
Route::get('task/destroy/{id}', array('uses' => 'TaskController@destroy'));





