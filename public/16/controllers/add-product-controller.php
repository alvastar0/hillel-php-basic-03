<?php

require_once __DIR__.'/../functions/database.php';

if ('POST' !== $_SERVER['REQUEST_METHOD']) {
    exit('Method Not Allowed.');
}

$name  = $_POST['name'] ?? null;
$image = $_FILES['image'] ?? null;
$price = $_POST['price'] ?? null;

if (null === $name || null === $image || null === $price) {
    exit('Name, image and price are required.');
}

$uploadFilePath = '/public/16/storage/'.$_FILES['image']['name'];

move_uploaded_file($_FILES['image']['tmp_name'], $uploadFilePath);

$connection = get_database_connection();

$statement = $connection->prepare(
    'INSERT INTO `products` (`name`, `image`, `price`) VALUES (:name, :image, :price)'
);

$statement->execute([
    'name' => $name,
    'image' => $uploadFilePath,
    'price' => $price
]);

header('Location: '.$_SERVER['HTTP_REFERER']);
exit();
