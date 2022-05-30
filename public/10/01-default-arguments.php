<?php

const EXPONENT_DEFAULT = 2;

function power(int $number, int $exponent = EXPONENT_DEFAULT)
{
    return $number ** $exponent;
}

echo power(2, 2).PHP_EOL;
echo power(2).PHP_EOL;
