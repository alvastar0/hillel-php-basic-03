<?php

/*
 * Данные пример демонстрирует возможность передачи данных в функцию с помощью
 * аргументов.
 */

function print_email_link($email)
{
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);

    echo '<a href="mailto:'.$email.'">'.$email.'</a>';
}

// Можем передавать как литералы...
print_email_link('alvastarua@gmail.com');
print_email_link('info@ithillel.com');

// ... так и переменные
$email = 'alvastar@github.com';

print_email_link($email);
