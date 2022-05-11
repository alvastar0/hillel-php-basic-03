<?php

$a = [
    'key_a' => 10,
    'key_b' => 20,
];

$b = [
    'key_b' => '20',
    'key_a' => '10',
];

if ($a == $b) {
    echo 'Equal';
} else {
    echo 'Not equal';
}

echo PHP_EOL;
