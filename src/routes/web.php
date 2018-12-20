<?php

Route::get('/', '\App\Http\Controllers\HomeController@index')->name('home');

Auth::routes(['verify' => true]);