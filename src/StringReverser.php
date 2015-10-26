<?php

namespace Exercises;

class StringReverser
{
    /**
     * With this way we can reverse the string without a new variable.
     * Only replacing chars in the original string.
     *
     * @param $input
     * @return string
     */
    public function reverse($input)
    {
        if (empty ($input)) {
            return '';
        }

        $length = strlen($input);
        $halfLength = $length / 2;

        for ($i = 0; $i < $halfLength; $i++) {
            $char = $input[$i];
            $input[$i] = $input[$length - 1 - $i];
            $input[$length - 1 - $i] = $char;
        }

        return $input;
    }

    /**
     * Returns if text is a palindrome or not
     *
     * @param $input
     * @return bool
     */
    public function isPalidrome($input)
    {
        return ($input === $this->reverse($input)) ? true : false;
    }
}
