<?php

$exponent = 2;

$function = function ($base) use ($exponent) {
    return $base ** $exponent;
};

echo $function(2); // 4
echo PHP_EOL;

$exponent = 4;

echo $function(2); // 4
echo PHP_EOL;
