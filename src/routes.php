<?php

Route::middleware('web')
    ->namespace('C18app/Cmsx')
    ->group(__DIR__ . ('/routes/web.php'));

Route::middleware(['web', 'auth', 'C18app\Cmsx\Middleware\Admin'])
    ->prefix('admin')
    ->namespace('C18app/Cmsx')
    ->group(__DIR__ . ('/routes/admin.php'));