<?php

declare(strict_types=1);

use App\Math\Exceptions\InvalidFormatException;
use App\Math\Math;

require_once '../vendor/autoload.php';

//instead of this you need to configure your own ini sdk data for Sentry
require_once '../init.php';

function doTask($value): void
{
    try {
        $reverse = Math::getReversed($value);

        echo sprintf('Reversed from %d is %f', $value, $reverse);
    }catch (ArithmeticError $exception){
        echo $exception->getMessage();
        //\Sentry\captureException($exception);
    } catch (InvalidFormatException $exception) {
        echo $exception->getMessage();
    }

    echo '<br>';
}

$value1 = 4;
$value2 = 'not int';

doTask($value1);
doTask($value2);
