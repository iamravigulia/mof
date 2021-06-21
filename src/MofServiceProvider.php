<?php

namespace edgewizz\mof;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class MofServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Edgewizz\Mof\Controllers\MofController');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // dd($this);
        $this->loadRoutesFrom(__DIR__.'/routes.php');
        $this->loadMigrationsFrom(__DIR__.'/migrations');
        $this->loadViewsFrom(__DIR__ . '/components', 'mof');
        Blade::component('mof::mof.open', 'mof.open');
        Blade::component('mof::mof.index', 'mof.index');
        Blade::component('mof::mof.edit', 'mof.edit');
    }
}
