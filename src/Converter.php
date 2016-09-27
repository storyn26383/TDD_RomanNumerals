<?php

namespace RomanNumerals;

class Converter
{
    public static function convert($input)
    {
        $output = '';

        while (10 <= $input) {
            $output .= 'X';
            $input -= 10;
        }

        if (5 <= $input) {
            $output .= 'V';
            $input -= 5;
        }

        return $output . str_repeat('I', $input);
    }
}
