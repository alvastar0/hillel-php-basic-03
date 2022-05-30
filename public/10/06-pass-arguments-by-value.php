<?php

$number = 5;

function square(int $number): int
{
    $number = $number ** 2;

    return $number;
}

square($number);

echo $number;
echo PHP_EOL;
