<?php

$number = random_int(1000, 9999);

echo 'Number: '.$number.PHP_EOL;

$summary = array_sum(str_split((string) $number));

echo 'Result: '.$summary.PHP_EOL;
