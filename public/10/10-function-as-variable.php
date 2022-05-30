<?php

$function = 'trim';

echo $function('  Hello  ');
echo PHP_EOL;

echo 'trim'('  Hello  ');
echo PHP_EOL;

$array = [
    '  a  ',
    '  b',
    'c  '
];

$trimmed = array_map($function, $array);

var_dump($trimmed);
