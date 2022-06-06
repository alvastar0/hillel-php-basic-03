<?php

session_start();

require_once __DIR__.'/../functions/alerts.php';

// 1. Проверить корректность запроса

if ('POST' !== $_SERVER['REQUEST_METHOD']) {
    set_alert('error', 'Method not allowed!');

    header('Location: /11-12/registration.php');

    exit;
}

// 2. Проверить данные

if (!isset($_POST['email']) || !isset($_POST['password'])) {
    set_alert('error', 'E-mail and password are required!');

    header('Location: /11-12/registration.php');

    exit;
}

$email    = trim($_POST['email']);
$password = md5($_POST['password']);

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    set_alert('error', 'Invalid e-mail address!');

    header('Location: /11-12/registration.php');

    exit;
}

// 3. Проверить существование пользователя.

$filename = '../storage/users/'.$email.'.json';

if (is_file($filename)) {
    set_alert('warning', 'User already exists!');

    header('Location: /11-12/registration.php');

    exit;
}

// 4. Добавить пользователя

$user = [
    'email'    => $email,
    'password' => $password
];

$contents = json_encode($user, JSON_PRETTY_PRINT);

file_put_contents($filename, $contents);
