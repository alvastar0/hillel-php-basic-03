<?php

/**
 * @var PDO $database
 */

require_once __DIR__.'/database.php';

$id = (int) $_GET['id'];

$queryString = 'SELECT * FROM `users` WHERE `id` = :id';

$statement = $database->prepare($queryString);
$statement->execute(['id' => $id]);

$user = $statement->fetch();

