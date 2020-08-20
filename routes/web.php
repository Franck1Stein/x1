<?php

use Illuminate\Support\Facades\Route;

// TODO ROUTES //
Route::group([ 'prefix' => 'todos', 'as' => 'todos.' ], function () {
    Route::get('/', 'TodoController@index')->name('index');
    Route::get('/create', 'TodoController@create')->name('create');
    Route::post('/create', 'TodoController@store')->name('store');
    Route::patch('/{todo}/update', 'TodoController@update')->name('update');
    Route::get('/{todo}/edit', 'TodoController@edit')->name('edit');
    Route::put('/{todo}/complete', 'TodoController@complete')->name('complete');
});

Route::get('/user', 'UserController@index')->name('user.index');
Route::post('/upload', 'UserController@uploadAvatar')->name('user.upload');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
