<?php

$number = random_int(PHP_INT_MIN, PHP_INT_MAX);

if ($number < 0) {
    echo 'Number ' . $number . ' is negative' . PHP_EOL;
} elseif ($number > 0) {
    echo 'Number ' . $number . ' is positive' . PHP_EOL;
} else {
    echo 'Zero' . PHP_EOL;
}
