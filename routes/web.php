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




// Main/Parent Task


Route::get('maintask/create', array('uses' => 'MaintaskController@create'));
Route::post('maintask/store', array('uses' => 'MaintaskController@store'));
Route::get('maintask/show', array('uses' => 'MaintaskController@show'));
Route::get('maintask/edit/{id}', array('uses' => 'MaintaskController@edit'));
Route::post('maintask/update', array('uses' => 'MaintaskController@update'));
Route::get('maintask/destroy/{id}', array('uses' => 'MaintaskController@destroy'));


// Task


Route::get('task/create', array('uses' => 'TaskController@create'));
Route::post('task/store', array('uses' => 'TaskController@store'));
Route::get('task/show', array('uses' => 'TaskController@show'));
Route::get('task/edit/{id}', array('uses' => 'TaskController@edit'));
Route::post('task/update', array('uses' => 'TaskController@update'));
Route::get('task/destroy/{id}', array('uses' => 'TaskController@destroy'));




// All Task
Route::get('alltask/show', array('uses' => 'AlltaskController@show'));
Route::get('alltask/edit/{id}', array('uses' => 'AlltaskController@edit'));
//Route::post('alltask/update', array('uses' => 'AlltaskController@update'));
//Route::get('alltask/destroy/{id}', array('uses' => 'AlltaskController@destroy'));

