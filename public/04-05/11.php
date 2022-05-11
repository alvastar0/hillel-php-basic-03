<?php

$isLoggedIn = true;

if (true === $isLoggedIn) {
    $number = random_int(PHP_INT_MIN, PHP_INT_MAX);

    if (0 === $number % 2) {
        echo $number . ' is even' . PHP_EOL;
    } else {
        echo $number . ' is odd' . PHP_EOL;
    }
}
