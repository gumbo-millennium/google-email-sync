<?php

declare(strict_types=1);

namespace Tests\Gumbo\EmailSync\Feature;

use Tests\Gumbo\EmailSync\TestCase;

class ApplicationLoadsTest extends TestCase
{
    /**
     * Test if the whole system just loads.
     *
     * @coversNothing
     */
    public function test_application_loads(): void
    {
        $this->assertNotNull($this->app);
    }
}
