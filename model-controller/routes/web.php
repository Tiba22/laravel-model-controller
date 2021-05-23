<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/', 'TestController@home')->name('home');

Route::get('/movie/{id}', 'TestController@movie')->name('movie');
