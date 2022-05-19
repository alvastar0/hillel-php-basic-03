<?php

$number = random_int(-10, 10);

if (0 === $number % 2) {
    $isEven = true;
} else {
    $isEven = false;
}

$isEven = 0 === $number % 2 ? true : false;
