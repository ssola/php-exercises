<?php

namespace Tests\Exercises;

use Exercises\MaximumSubarray;

class MaximumSubarrayTest extends \PHPUnit_Framework_TestCase
{
    public function testFindMaximumSubarray()
    {
        $input = [-2, 1, -3, 4, -1, 2, 1, -5, 4];
        $expectedResult = 6;

        $maximum = new MaximumSubarray();

        $this->assertEquals(
            $expectedResult, $maximum->find($input)
        );
    }
}
