<?php

$number = 10;

if (is_int($number)) {
    echo 'Integer', PHP_EOL;
}

if (is_string($number)) {
    echo 'String', PHP_EOL;
}

if (is_numeric($number)) {
    echo 'Numeric', PHP_EOL;
}
