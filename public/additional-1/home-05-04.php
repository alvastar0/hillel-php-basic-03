<?php

$number = random_int(1000, 9999);

echo 'Number: '.$number.PHP_EOL;

$digits = str_split((string) $number);

$callback = function (int $curry, int $item) {
    echo 'Curry: '.$curry.PHP_EOL;
    echo 'Item: '.$item.PHP_EOL;

    $curry += $item;

    return $curry;
};

$summary = array_reduce($digits, $callback, 1000);

echo 'Result: '.$summary.PHP_EOL;
