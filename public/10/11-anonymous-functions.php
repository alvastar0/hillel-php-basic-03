<?php /** @noinspection UnnecessaryClosureInspection */

$array = [
    '  a  ',
    '  b',
    'c  '
];

$trimmed = my_array_map(
    function ($value) {
        return trim($value);
    },
    $array
);

function my_array_map(callable $callback, array $array): array
{
    $values = [];

    foreach ($array as $value) {
        $values[] = $callback($value);
    }

    return $values;
}

var_dump($trimmed);