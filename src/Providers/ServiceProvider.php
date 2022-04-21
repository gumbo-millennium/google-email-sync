<?php

declare(strict_types=1);

namespace Gumbo\EmailSync\Providers;

use Gumbo\EmailSync\Console;
use Illuminate\Support\ServiceProvider as LaravelServiceProvider;

class ServiceProvider extends LaravelServiceProvider
{
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__ . '/../../database/migrations');

        $this->mergeConfigFrom(
            __DIR__ . '/../../config/google-email-sync.php',
            'google-email-sync',
        );

        $this->publishes([
            __DIR__ . '/../../config/google-email-sync.php' => config_path('google-email-sync.php'),
        ], 'config');

        if ($this->app->runningInConsole()) {
            $this->commands([
                Console\UpdateCommand::class,
                Console\ImportCommand::class,
            ]);
        }
    }
}
