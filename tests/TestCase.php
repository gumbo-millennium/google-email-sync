<?php

declare(strict_types=1);

namespace Tests\Gumbo\EmailSync;

use Gumbo\EmailSync;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Orchestra\Testbench\TestCase as TestbenchTestCase;

class TestCase extends TestbenchTestCase
{
    use RefreshDatabase;

    /**
     * Get package providers.
     *
     * @param \Illuminate\Foundation\Application $app
     *
     * @return array
     */
    protected function getPackageProviders($app)
    {
        return [
            EmailSync\Providers\ServiceProvider::class,
        ];
    }

    /**
     * Override application aliases.
     *
     * @param \Illuminate\Foundation\Application $app
     *
     * @return array
     */
    protected function getPackageAliases($app)
    {
        return [
            'EmailSync' => EmailSync\Facades\EmailSync::class,
        ];
    }
}
