# Laravel Cassandra

A Laravel 5 wrapper for Cassandra

## Installation

Pull in using Composer

```
"require": {
    ...
    "initworks/laravel-cassandra": "dev-master"
}
```

Add the Service Provider to the providers array:

```php
'providers' => [
    \Initworks\LaravelCassandra\Providers\LaravelCassandraServiceProvider::class,
]
```