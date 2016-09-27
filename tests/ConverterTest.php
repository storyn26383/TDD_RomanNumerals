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

    public function testConvert2()
    {
        $this->assertEquals('II', Converter::convert(2));
    }

    public function testConvert5()
    {
        $this->assertEquals('V', Converter::convert(5));
    }

    public function testConvert6()
    {
        $this->assertEquals('VI', Converter::convert(6));
    }

    public function testConvert10()
    {
        $this->assertEquals('X', Converter::convert(10));
    }

    public function testConvert11()
    {
        $this->assertEquals('XI', Converter::convert(11));
    }
}
