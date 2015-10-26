<?php

namespace Tests\Exercises;

use Exercises\FibonacciCalculator;

class FibonacciTest extends \PHPUnit_Framework_TestCase
{
    public function testCalculate10FirstFibonacciNumbers()
    {
        $expectedResult = [
            0, 1, 1, 2, 3, 5, 8, 13, 21, 34
        ];

        $fibonacci = new FibonacciCalculator();

        $this->assertEquals(
            $expectedResult, $fibonacci->calculateSequence(10)
        );
    }
}
