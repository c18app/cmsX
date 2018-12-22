<?php

Route::view('/', config('cmsx.app.template').'::cmsx')->name('home');

Auth::routes(['verify' => true]);