<?php

namespace RomanNumerals;

class Converter
{
    protected static $maps = [
        10 => 'X',
        9 => 'IX',
        5 => 'V',
        4 => 'IV',
        1 => 'I',
    ];

    public static function convert($input)
    {
        $output = '';

        foreach (static::$maps as $value => $symbol) {
            while ($value <= $input) {
                $output .= $symbol;
                $input -= $value;
            }
        }

        return $output;
    }
}
