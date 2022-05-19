<?php

$user = [
    'email' => 'johndoe@gmail.com',
    'password' => md5(' '),
];

if (!isset($user['name'])) {
    $userName = 'Неопознанный Броненосец';
}

$userName = isset($user['name']) ? $user['name'] : 'Неопознанный броненосец';

$userName = $user['name'] ?? 'Неопознанный броненосец';

echo $userName.PHP_EOL;
