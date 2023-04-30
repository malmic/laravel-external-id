<?php

namespace Eeappdev\ExternalId;

use Illuminate\Support\ServiceProvider;

class ExternalIdServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {

    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->loadMigrationsFrom(__DIR__.'/../database/migrations/');

            $this->publishes([
                __DIR__.'/../database/migrations/create_external_ids_table.php.stub' =>
                database_path('migrations/' . date('Y_m_d_His', time()) . '_create_external_ids_table.php')
            ], 'migrations');
        }
    }
}
