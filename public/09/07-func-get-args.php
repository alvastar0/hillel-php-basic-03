<?php

/*
 * Данные пример демонстрирует, как можно получить аргумента в виде массива
 * (даже если было передано большее количество аргументов, чем указано при
 * определении функции).
 *
 * @link https://www.php.net/manual/ru/function.func-get-args.php
 */

function print_email_link($email)
{
    print_r(func_get_args());
}

print_email_link('alvastarua@gmail.com', 'alvastar@github.com');
