<?php

/**
 * @var PDO $database
 */

require_once __DIR__.'/database.php';

$queryString = 'DELETE FROM `users` WHERE `id` = 2 OR `id` = 3';

$database->query($queryString);
