<?php

/*
 * Этот пример демонстрирует работу именованных аргументов.
 */

function save_user($name, $email, $address, $gender, $birthdate)
{
    // ...
}

// Позиционные аргументы
save_user('John Doe', 'johndoe@gmail.com', '221B Baker Street', 'Male', '1990-01-01');

// Именованные аргументы (порядок не важен для синтаксиса, но по прежнему важен
// для согласованности кода)
save_user(
    name: 'John Doe',
    email: 'johndoe@gmail.com',
    address: '221B Baker Street',
    gender: 'Male',
    birthdate: '1990-01-01',
);
