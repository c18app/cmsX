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

Route::get('page/{id}-{slug}', 'CmsController@page')->name('cms.page');
Route::get('article/{id}-{slug}', 'CmsController@article')->name('cms.article');

Route::get('/', 'CmsController@index')->name('homepage');

Auth::routes();