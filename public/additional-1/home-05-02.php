<?php

$number = random_int(1000, 9999);

echo 'Number: '.$number.PHP_EOL;

$numbers = str_split((string) $number);
$summary = 0;

foreach ($numbers as $number) {
    $summary += (int) $number;
}

echo 'Result: '.$summary.PHP_EOL;
