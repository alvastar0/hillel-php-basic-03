<?php

require_once __DIR__.'/database.php';

function get_products(int $limit, int $offset = 0): array
{
    $connection = get_database_connection();

    $statement = $connection->prepare(
        'SELECT * FROM `products` LIMIT :offset, :limit'
    );

    $statement->execute(compact('offset', 'limit'));

    return $statement->fetchAll();
}

function count_products(): int
{
    $connection = get_database_connection();

    $statement = $connection->prepare(
        'SELECT COUNT(*) AS products_count FROM `products`'
    );

    $statement->execute();

    return (int) $statement->fetch()['products_count'];
}
