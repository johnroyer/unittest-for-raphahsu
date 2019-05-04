<?php

require __DIR__ . '/lib.php';

use PHPUnit\Framework\TestCase;

class LibTest extends TestCase
{
    public function setup()
    {
    }

    public function tearDown()
    {
    }

    public function testOneAddOne()
    {
        $this->assertEquals(2, adder(1, 1));
    }
}
