<?php

declare(strict_types=1);

namespace Gumbo\EmailSync\Providers;

use Illuminate\Support\ServiceProvider as LaravelServiceProvider;

class ServiceProvider extends LaravelServiceProvider
{
    public function boot()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../../config/google-email-sync.php',
            'google-email-sync',
        );

        $this->publishes([
            __DIR__ . '/../../config/google-email-sync.php' => config_path('google-email-sync.php'),
        ], 'config');
    }
}
