<?php

/*
 * Host - адрес сервера, где запущен MySQL.
 *      + localhost     (если на одном сервере);
 *      + 127.0.0.1
 *      + mysql         (если Docker);
 *      + 1.2.3.4       (IP адрес).
 * Port - 3306
 * База данных - имя базы к которой будет подключение.
 * User - пользователь, от имени которого будет подключение.
 * Password - Пароль пользователя.
 * CharSet - utf8mb4
 */

//$dns = 'mysql:host=mysql;port=3306;dbname=default;charset=utf8mb4';
$dns = 'mysql:host=127.0.0.1;port=3306;dbname=hillel;charset=utf8mb4';

$database = new PDO($dns, 'root', '', [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
]);
