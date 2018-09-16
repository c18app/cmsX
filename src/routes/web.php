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

Route::get('login', 'C18app\Cmsx\Controllers\Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'C18app\Cmsx\Controllers\Auth\LoginController@login');
Route::get('logout', 'C18app\Cmsx\Controllers\Auth\LoginController@logout')->name('logout');

Route::get('register', 'C18app\Cmsx\Controllers\Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'C18app\Cmsx\Controllers\Auth\RegisterController@register');

Route::get('password/reset',
    'C18app\Cmsx\Controllers\Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email',
    'C18app\Cmsx\Controllers\Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}',
    'C18app\Cmsx\Controllers\Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'C18app\Cmsx\Controllers\Auth\ResetPasswordController@reset');


Route::get('page/{id}-{slug}', 'C18app\Cmsx\Controllers\CmsController@page')->name('cms.page');
Route::get('article/{id}-{slug}', 'C18app\Cmsx\Controllers\CmsController@article')->name('cms.article');

Route::get('/', 'C18app\Cmsx\Controllers\CmsController@index')->name('homepage');
