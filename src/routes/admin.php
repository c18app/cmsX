<?php

Route::redirect('/', 'admin/dashboard');
Route::get('dashboard', 'C18app\Cmsx\Controllers\Admin\AdminController@dashboard')->name('admin.dashboard');

Route::resources([
    'pages' => 'C18app\Cmsx\Controllers\Admin\PageController',
    'tags' => 'C18app\Cmsx\Controllers\Admin\TagController',
    'translates' => 'C18app\Cmsx\Controllers\Admin\TranslateController',
    'articles' => 'C18app\Cmsx\Controllers\Admin\ArticleController'
]);

Route::post('{type}/sort', 'C18app\Cmsx\Controllers\Admin\AdminController@sort')->name('admin.sort');
Route::view('tweet', Config('cmsx.app.template-admin') . '::nocontent')->name('admin.tweets');
Route::view('content', Config('cmsx.app.template-admin') . '::nocontent')->name('admin.content');
Route::view('comment', Config('cmsx.app.template-admin') . '::nocontent')->name('admin.comment');
Route::view('file', Config('cmsx.app.template-admin') . '::nocontent')->name('admin.file');
Route::view('gallery', Config('cmsx.app.template-admin') . '::nocontent')->name('admin.gallery');
Route::view('category', Config('cmsx.app.template-admin') . '::nocontent')->name('admin.category');
Route::view('menu', Config('cmsx.app.template-admin') . '::nocontent')->name('admin.menu');
Route::view('user', Config('cmsx.app.template-admin') . '::nocontent')->name('admin.user');
Route::view('maillist', Config('cmsx.app.template-admin') . '::nocontent')->name('admin.maillist');
Route::view('settings', Config('cmsx.app.template-admin') . '::nocontent')->name('admin.setting');
