<?php

/*
 * См. 03-variable-context.php
 */

$email = 'alvastarua@gmail.com';

function print_email_link()
{
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);

    echo '<a href="mailto:' . $email . '">' . $email . '</a>';
}

print_email_link();
