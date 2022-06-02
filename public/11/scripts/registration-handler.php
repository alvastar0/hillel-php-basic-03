<?php

// 1. Проверить корректность запроса

if ('POST' !== $_SERVER['REQUEST_METHOD']) {
    http_response_code(405);
    exit;
}

// 2. Проверить данные

if (!isset($_POST['email']) || !isset($_POST['password'])) {
    http_response_code(400);
    exit;
}

$email    = trim($_POST['email']);
$password = md5($_POST['password']);

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    http_response_code(400);
    exit;
}

// 3. Проверить существование пользователя.

$filename = '../storage/users/'.$email.'.json';

if (is_file($filename)) {
    http_response_code(302);
    exit('User already exists!');
}

// 4. Добавить пользователя

$user = [
    'email'    => $email,
    'password' => $password
];

$contents = json_encode($user, JSON_PRETTY_PRINT);

file_put_contents($filename, $contents);
