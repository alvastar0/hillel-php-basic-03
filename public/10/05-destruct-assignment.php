<?php

function sum($base, ...$numbers)
{
    $summary = $base;

    foreach ($numbers as $number) {
        if (!is_numeric($number)) {
            continue;
        }

        $summary += $number;
    }

    return $summary;
}

function generate(
    int $count = 2,
    int $min = PHP_INT_MIN,
    int $max = PHP_INT_MAX,
    bool $unique = true
): array {
    $values = [];

    do {
        $number = random_int($min, $max);

        if ($unique && in_array($number, $values, true)) {
            continue;
        }

        $values[] = $number;
    } while (count($values) < $count);

    return $values;
}

[$a, $b] = generate();

var_dump($a);
var_dump($b);

echo sum(0, ...generate());
echo PHP_EOL;
