<?php

namespace RomanNumerals;

class Converter
{
    public static function convert($input)
    {
        if (5 === $input) {
            return 'V';
        }

        return str_repeat('I', $input);
    }
}
