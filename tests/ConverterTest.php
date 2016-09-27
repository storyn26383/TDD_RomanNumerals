<?php

// https://en.wikipedia.org/wiki/Roman_numerals

// input => output
//     1 => I
//     2 => II
//     5 => V
//     6 => VI
//    10 => X
//    11 => XI
//    20 => XX
//    50 => L
//     4 => IV
//     9 => IX
//   100 => C
//   500 => D
//  1000 => M
//  1999 => MCMXCIX
//  4990 => MMMMCMXC

namespace RomanNumerals;

use RomanNumerals\Converter;
use PHPUnit\Framework\TestCase;

class ConverterTest extends TestCase
{
    public function testConvert1()
    {
        $this->assertEquals('I', Converter::convert(1));
    }
}
