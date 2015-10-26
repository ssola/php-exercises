<?php

namespace Tests\Exercises;

use Exercises\PrimeNumbers;

class PrimeNumbersTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function testIfNumberIsPrimeOrNot($input, $expectedResult)
    {
        $primeNumbers = new PrimeNumbers;

        $this->assertEquals(
            $expectedResult, $primeNumbers->isPrime($input)
        );
    }

    public function dataProvider()
    {
        return [
            [7, true],
            [11, true],
            [907, true],
            [997, true],
            [4093, true],
            [9973, true],
            [204887, true],
            [45548039, true],
            [5, true],
            [342420, false],
            [999999990, false],
            [-13, false]
        ];
    }
}
