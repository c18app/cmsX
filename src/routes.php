<?php

Route::middleware(['web', 'auth', 'verified', 'C18app\Cmsx\Middleware\Admin'])
    ->prefix('admin')
    ->namespace('C18app\Cmsx\Controllers\Admin')
    ->group(__DIR__ . ('/routes/admin.php'));

Route::middleware('web')
    ->namespace('C18app\Cmsx\Controllers')
    ->group(__DIR__ . ('/routes/web.php'));