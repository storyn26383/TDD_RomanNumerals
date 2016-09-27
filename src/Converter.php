<?php

namespace RomanNumerals;

class Converter
{
    public static function convert($input)
    {
        $output = '';

        if (5 <= $input) {
            $output = 'V';
            $input -= 5;
        }

        return $output . str_repeat('I', $input);
    }
}
