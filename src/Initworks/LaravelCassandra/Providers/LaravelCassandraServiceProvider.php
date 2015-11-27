<?php

namespace Initworks\LaravelCassandra\Providers;

use Illuminate\Support\ServiceProvider;

class LaravelCassandraServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        // Register cassandra
        $this->app->singleton(\Cassandra\Connection::class);
    }
}
