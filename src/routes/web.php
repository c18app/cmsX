<?php

Route::get('/', 'CmsxController@index')->name('home');

Auth::routes(['verify' => true]);