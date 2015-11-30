# Laravel Cassandra

A Laravel 5 wrapper for Cassandra

## Installation

Pull in using Composer

```
"require": {
    ...
    "initworks/laravel-cassandra": "^1.0"
}
```

Add the Service Provider to the providers array:

```php
'providers' => [
    \Initworks\LaravelCassandra\Providers\LaravelCassandraServiceProvider::class,
]
```