<?php

/**
 * @var PDO $database
 */

require_once __DIR__.'/database.php';

$email = 'alvastar@example.ua';
$password = '$2a$10$zYWJcJgdQ3O1oVv3PeR5SOd4wwLwBw7i5iiRFxX.eaXDUJlgJRS/.';
$name = 'Антон Антонов';

$queryString = '
    INSERT INTO `users` (`email`, `password`, `name`)
    VALUES (?, ?, ?)
';

$statement = $database->prepare($queryString);

$statement->execute([
    $email,
    $password,
    $name
]);
