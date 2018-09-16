<?php


Route::get('storage/{folder}/{filename}', function ($folder, $filename) {
    $path = storage_path() . '/app/public/' . $folder . '/' . $filename;

    if (!File::exists($path)) {
        abort(404);
    }

    $file = File::get($path);
    $type = File::mimeType($path);

    $response = Response::make($file, 200);
    $response->header("Content-Type", $type);
    return $response;
})->name('storage');

//Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
//Route::post('login', 'Auth\LoginController@login');
//Route::get('logout', 'Auth\LoginController@logout')->name('logout');
//
//Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
//Route::post('register', 'Auth\RegisterController@register');
//
//Route::get('password/reset',
//    'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
//Route::post('password/email',
//    'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
//Route::get('password/reset/{token}',
//    'Auth\ResetPasswordController@showResetForm')->name('password.reset');
//Route::post('password/reset', 'Auth\ResetPasswordController@reset');


Route::get('page/{id}-{slug}', 'CmsController@page')->name('cms.page');
Route::get('article/{id}-{slug}', 'CmsController@article')->name('cms.article');

Route::get('/', 'CmsController@index')->name('homepage');
