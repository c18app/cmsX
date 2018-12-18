<?php

namespace C18app\Cmsx;

use Illuminate\Support\ServiceProvider as SP;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Schema;

class ServiceProvider extends SP
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(Router $router)
    {
        $this->mergeConfigFrom(
            __DIR__.'/config/cmsx.php', 'cmsx'
        );
        $this->loadRoutesFrom(__DIR__.'/routes.php');
        $this->loadViewsFrom(__DIR__.'/views/templates/default', 'cmsx-templates-default');
        $this->loadViewsFrom(__DIR__.'/views/admin/default', 'cmsx-templates-admin-default');
        $this->loadMigrationsFrom(__DIR__.'/Migrations');

        // publishes
        $this->publishes([
            __DIR__.'/assets' => public_path('vendor/c18app/cmsx')
        ], 'c18app_cmsx');

        $this->publishes([
            __DIR__.'/config/cmsx.php' => config_path('cmsx.php')
        ], 'c18app_cmsx-config');

        $this->app->register(SeedServiceProvider::class);

//        $this->publishes([
//            __DIR__.'/views/templates/default/customizable' => resource_path('views/vendor/cmsx/templates/default/customizable')
//        ], 'c18app_cmsx-templates-default-custom');
//
//        $this->publishes([
//            __DIR__.'/views/templates/default' => resource_path('views/vendor/cmsx/templates/default')
//        ], 'c18app_cmsx-templates-default');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
