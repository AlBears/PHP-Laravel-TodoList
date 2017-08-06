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
    return view('welcome');
});

Route::get('/new', [
  'uses' => 'PagesController@new'
]);

Route::get('/todos', [
  'uses' => 'TodosController@index'
]);

Route::get('/todo/delete/{id}', [
  'uses' => 'TodosController@delete',
  'as' => 'todo.delete'
]);

Route::post('/create/todo', [
  'uses' => 'TodosController@store'
]);
