<?php

$user = [
    'user' => [
        'name' => 'John Doe',
        'email' => 'johndoe@example.com',
    ],
    'balance' => 0,
];

var_dump($user);

unset($user['user']['email']);

var_dump($user);
