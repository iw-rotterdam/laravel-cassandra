<?php

namespace Initworks\LaravelCassandra\Test;

class LaravelCassandraLoadTest extends \PHPUnit_Framework_TestCase
{
    public function testCanInitialize()
    {
        $hasPHPCassandra = class_exists(\Cassandra\Connection::class);
        $this->assertTrue($hasPHPCassandra);
    }
}
