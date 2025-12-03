<?php

declare(strict_types=1);

namespace Test;

use App\Calculator;
use InvalidArgumentException;
use Test\Attribute\DataProvider;

final class CalculatorTest extends TestCase
{
    #[DataProvider('getValues')]
    public function testCorrect(int|float $expected, int|float $num1, int|float $num2): void
    {
        self::assertEquals($expected, Calculator::sum($num1, $num2));
    }

    public static function getValues(): iterable
    {
        return [
            'integer1' => [2, 1, 1],
            'integer2' => [100, 40, 60],
            'float' => [1.0, 0.5, 0.5],
        ];
    }

    public function testIncorrect(): void
    {
        $this->expectException(InvalidArgumentException::class);

        Calculator::div(5, 0);
    }

    public function testIncomplete(): void
    {
        self::markTestIncomplete('I am too lazy...');
    }
}
