<?php

require __DIR__ . '/checker.php';

use PHPUnit\Framework\TestCase;

class CheckerTest extends TestCase
{
    public function setUp()
    {
    }

    public function tearDown()
    {
    }

    /**
     * @dataProvider ScoreRangeProvider
     */
    public function testInputRange($score, $expected)
    {
    }

    public function ScoreRangeProvider()
    {
        return [
            [100, true],
            [200, false],
            [0, true],
            [-100, false],
        ];
    }
}
