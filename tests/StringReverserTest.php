<?php

namespace Tests\Exercises;

use Exercises\StringReverser;

class StringReverserTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider dataProviderForReverser
     */
    public function testTextIsReversed($input, $expectedResult)
    {
        $reverser = new StringReverser();

        $this->assertEquals(
            $expectedResult, $reverser->reverse($input)
        );
    }

    /**
     * @dataProvider dataProviderForPalindrome
     */
    public function testIsTextIsPalindrome($input, $expectedResult)
    {
        $reverser = new StringReverser();

        $this->assertEquals(
            $expectedResult, $reverser->isPalidrome($input)
        );
    }

    public function dataProviderForReverser()
    {
        return [
            ['', ''],
            ['Hello World', 'dlroW olleH'],
            ['My Name is Sergio and this is a test', 'tset a si siht dna oigreS si emaN yM'],
            ['Everyone loves the number 101', '101 rebmun eht sevol enoyrevE'],
        ];
    }

    public function dataProviderForPalindrome()
    {
        return [
            ['deleveled', true],
            ['redivider', true],
            ['degged', true],
            ['10001', true],
            ['New York', false],
            ['some stuff', false]
        ];
    }
}
