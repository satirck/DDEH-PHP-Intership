<?php

declare(strict_types=1);

namespace App\Math;

use App\Math\Exceptions\InvalidFormatException;
use ArithmeticError;

class Math
{
    /**
     * @param int $number
     * @return float making the formula 1 / number
     * @throws ArithmeticError when the given number is zero
     * @throws InvalidFormatException when the given was not an int
     */
    public static function getReversed($number): float
    {
        if (! is_numeric($number)){
            throw new InvalidFormatException(
                sprintf('Expected type int but the given was %s', gettype($number))
            );
        }

        if ($number === 0) {
            throw new ArithmeticError('Given number was 0. Error dividing by zero!');
        }

        return 1 / $number;
    }
}
