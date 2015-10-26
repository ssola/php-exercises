<?php

namespace Exercises;

class FibonacciCalculator
{
    /**
     * @param int $length Return this given amount of numbers
     * @return array
     */
    public function calculateSequence($length)
    {
        // It always starts like this.
        $sequence = [0, 1];

        foreach (range(2, $length - 1) as $number) {
            array_push($sequence, $sequence[$number - 1] + $sequence[$number - 2]);
        }

        return $sequence;
    }
}
