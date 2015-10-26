<?php

namespace Exercises;

/**
 * This is the most optimized prime checker:
 *
 * Because if a factor is greater than the square root of n, the other factor that would multiply with it to equal n is necessarily less than the square root of n.
 */
class PrimeNumbers
{
    /**
     * @param $input
     * @return bool
     */
    public function isPrime($input)
    {
        if (!$this->guardSimpleScenarios($input)) {
            return false;
        }

        $root = intval(sqrt($input) + 1);
        $step = ($root < 5) ? 1 : 2;

        foreach (range(3, $root, $step) as $i) {
            if ($input % $i == 0) {
                return false;
            }
        }

        return true;
    }

    /**
     * @param $input
     * @return bool
     */
    protected function guardSimpleScenarios($input)
    {
        if ($input < 1) {
            return false;
        }

        if ($input == 1) {
            return true;
        }

        if ($input % 2 == 0) {
            return false;
        }

        return true;
    }
}
