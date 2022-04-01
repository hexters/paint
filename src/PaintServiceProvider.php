<?php

namespace Hexters\Paint;

use Illuminate\Support\ServiceProvider;

class PaintServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        /**
         * Publish module
         */
        $this->publishes([
            __DIR__ . '/../modules/Paint' => base_path('Modules/Paint'),
        ], 'paint-module');
    }
}
