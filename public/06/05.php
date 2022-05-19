<?php

$string = 'qwerty';

echo $string[1], PHP_EOL;
echo $string[-1], PHP_EOL;

$string[1] = 'W';
$string[-1] = 'Y';

echo $string[1], PHP_EOL;
echo $string[-1], PHP_EOL;

$string[25] = '!';

echo $string, PHP_EOL;
