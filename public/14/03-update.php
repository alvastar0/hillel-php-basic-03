<?php

/**
 * @var PDO $database
 */

require_once __DIR__.'/database.php';

$queryString = '
    UPDATE `users`
    SET `name` = "Николай Николаев"
    WHERE `id` = 1
';

$database->query($queryString);
