<?php

/**
 * @var PDO $database
 */

require_once __DIR__.'/database.php';

$email = 'alvastar@example.org';
$password = '$2a$10$zYWJcJgdQ3O1oVv3PeR5SOd4wwLwBw7i5iiRFxX.eaXDUJlgJRS/.';
$name = 'Иван Михайлов';

$queryString = '
    INSERT INTO `users` (`email`, `password`, `name`)
    VALUES (:userEmail, :userPassword, :userName)
';

$statement = $database->prepare($queryString);

$statement->execute([
    'userEmail' => $email,
    'userPassword' => $password,
    'userName' => $name
]);
