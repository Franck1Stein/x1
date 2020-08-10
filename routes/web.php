<?php

Route::get('/todos', 'TodoController@index')->name('todo.index');
Route::get('/todos/create', 'TodoController@create')->name('todo.create');
Route::post('/todos/create', 'TodoController@store')->name('todo.store');
Route::patch('/todos/{todo}/update', 'TodoController@update')->name('todo.update');
Route::get('/todos/{todo}/edit', 'TodoController@edit')->name('todo.edit');


Route::get('/', function () {
    return view('welcome');
});

Route::get('/user', 'UserController@index');

Route::post('/upload', 'UserController@uploadAvatar');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
