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

        while (9 <= $input) {
            $output .= 'IX';
            $input -= 9;
        }

        while (5 <= $input) {
            $output .= 'V';
            $input -= 5;
        }

        while (4 <= $input) {
            $output .= 'IV';
            $input -= 4;
        }

        return $output . str_repeat('I', $input);
    }
}
