<?php

$assoc = [
    'user' => [
        'name' => 'John Doe',
        'email' => 'johndoe@example.com',
    ],
    'balance' => 100.00,
];

echo $assoc['user']['name'], PHP_EOL;
echo $assoc['balance'], PHP_EOL;

$numeric = [10, 20, 30, [70, 80, 90], [100, 200, 300]];

echo $numeric[4][1], PHP_EOL;

$numeric[4][] = 400;

echo $numeric[4][3], PHP_EOL;
