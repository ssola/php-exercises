<?php

namespace Exercises;

class MaximumSubarray
{
    /**
     * Find Maximum Sub-array using Kadane's algorithm
     *
     * @param array $input
     * @return int
     */
    public function find(array $input = [])
    {
        if (empty($input)) {
            return 0;
        }

        $maxEndingHere = $maxSoFar = 0;

        foreach ($input as $number) {
            $maxEndingHere = max(0, $maxEndingHere + $number);
            $maxSoFar = max($maxSoFar, $maxEndingHere);
        }

        return $maxSoFar;
    }
}
