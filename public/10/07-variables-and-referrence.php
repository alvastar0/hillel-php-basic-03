<?php

$number  = 50;
$mirror  = &$number;
$another = &$mirror;

echo '$number = '.$number.PHP_EOL;
echo '$mirror = '.$mirror.PHP_EOL;

$number = 100;

echo '$number = '.$number.PHP_EOL;
echo '$mirror = '.$mirror.PHP_EOL;

$mirror = 250;

echo '$number = '.$number.PHP_EOL;
echo '$mirror = '.$mirror.PHP_EOL;
