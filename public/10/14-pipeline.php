<?php

function pipe(mixed $value, callable ...$callbacks): mixed
{
    foreach ($callbacks as $callback) {
        $value = $callback($value);
    }

    return $value;
}

$text = '   <a href="https://google.com">Google</a>   ';

$filters = [
    'trim',
    'strip_tags',
    'mb_strtoupper'
];

echo pipe($text, ...$filters);
echo PHP_EOL;
