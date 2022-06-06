<?php

session_start();

require_once __DIR__.'/../functions/alerts.php';

// 1. Проверить корректность запроса

if ('POST' !== $_SERVER['REQUEST_METHOD']) {
    set_alert('error', 'Method not allowed!');

    header('Location: /11-12/auth.php');

    exit;
}

// 2. Проверить данные

if (!isset($_POST['email']) || !isset($_POST['password'])) {
    set_alert('error', 'E-mail and password are required!');

    header('Location: /11-12/auth.php');

    exit;
}

$email    = trim($_POST['email']);
$password = md5($_POST['password']);

// 3. Проверить наличие пользователя

$filename = '../storage/users/'.$email.'.json';

if (!is_file($filename)) {
    set_alert('warning', 'User not found!');

    header('Location: /11-12/auth.php');

    exit;
}

// 4. Считываю данные пользователя и сравниваю пароли

$contents = file_get_contents($filename);
$user     = json_decode($contents, true);

if ($password !== $user['password']) {
    set_alert('warning', 'Wrong password!');

    header('Location: /11-12/auth.php');

    exit;
}

// 5. Сохраняем данные аутентификации

$_SESSION['auth'] = $email;

set_alert('success', 'Welcome!');

header('Location: /11-12/index.php');
