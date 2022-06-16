<?php

/**
 * @var PDO $database
 */

require_once __DIR__.'/database.php';

$queryString = 'SELECT * FROM `users`';

$statement = $database->query($queryString);

//$users = $statement->fetchAll();
//
//foreach ($users as $user) {
//    echo $user['email'].PHP_EOL;
//}

while ($user = $statement->fetch()) {
    echo $user['email'].PHP_EOL;
}
