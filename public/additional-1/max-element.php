<?php

$numbers = [
    3, 7, 8, 3, 4, 9, 1
];

$length = count($numbers);
$max    = $numbers[0];

for ($i = 1; $i < $length; ++$i) {
    $current = $numbers[$i];

    echo 'Max: '.$max.PHP_EOL;
    echo 'Current: '.$current.PHP_EOL;

    if ($current > $max) {
        $max = $current;
    }
}

echo 'Final Max: '.$max.PHP_EOL;
