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

    public function testAddNegativeInteger()
    {
        $this->assertEquals(-1, adder(0, -1));
    }

    public function testAddFloat()
    {
        $this->expectException(Exception::class);

        adder(0.1, 1);
        adder(0.1, 0.1);
        adder(1, 0.1);
    }

    public function testAddWrongType()
    {
        $this->expectException(Exception::class);

        adder(null, 1);
        adder(1, null);
        adder(null, null);
        adder('1', 1);
        adder(1, '1');
    }
}
