<?php

namespace App;

class Calculator
{
    public static function sum(int|float $number1, int|float $number2): int|float
    {
        return $number1 + $number2;
    }

    public static function div(int|float $number1, int|float $number2): int|float
    {
        if ($number2 == 0) {
            throw new \InvalidArgumentException("Division by zero");
        }

        return $number1 + $number2;
    }
}
