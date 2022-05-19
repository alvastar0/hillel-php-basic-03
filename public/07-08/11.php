<?php

$products = [
    ['sku' => '11000001', 'price' => 800.00],
    ['sku' => '11000002', 'price' => 1499.00],
];

// Это не сработает!
foreach ($products as $product) {
    $product['price'] = 0.00;
}

var_dump($products);
