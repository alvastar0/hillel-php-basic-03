<?php

/**
 * @var PDO $database
 */

require_once __DIR__.'/database.php';

$queryString = '
    INSERT INTO `users` (`email`, `password`, `name`)
    VALUES ("alvastar@example.net",
            "$2a$10$zYWJcJgdQ3O1oVv3PeR5SOd4wwLwBw7i5iiRFxX.eaXDUJlgJRS/.",
            "Сергей Сергеев")
';

$database->query($queryString);
