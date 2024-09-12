<?php

namespace MVehar\LaravelEmailDatabaseLog\Tests;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Carbon;
use MVehar\LaravelEmailDatabaseLog\LaravelEmailDatabaseLogServiceProvider;


class TestCase extends \Orchestra\Testbench\TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();

        Carbon::setTestNow(now());
    }

    /**
     * Define database migrations.
     *
     * @return void
     */
    protected function defineDatabaseMigrations()
    {
        $this->loadMigrationsFrom(
            __DIR__.'/../src/database/migrations'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            LaravelEmailDatabaseLogServiceProvider::class,
        ];
    }
}
