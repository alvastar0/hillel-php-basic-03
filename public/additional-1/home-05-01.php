<?php

$number = random_int(1000, 9999);

echo 'Number: '.$number.PHP_EOL;

$firstDigit  = (int) ($number / 1000) % 10;
$secondDigit = (int) ($number / 100) % 10;
$thirdDigit  = (int) ($number / 10) % 10;
$fourthDigit = $number % 10;

$result = $firstDigit + $secondDigit + $thirdDigit + $fourthDigit;

echo 'Result: '.$result.PHP_EOL;
