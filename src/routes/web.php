<?php

Route::view('/', config('cmsx.app.template').'::cmsx')->name('cmsx');

Auth::routes(['verify' => true]);