<?php

Route::view('/', config('cmsx.app.template').'::home')->name('home');

Auth::routes(['verify' => true]);