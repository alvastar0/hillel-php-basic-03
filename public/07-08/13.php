<?php

$products = [
    ['sku' => '11000001', 'price' => 800.00],
    ['sku' => '11000002', 'price' => 1499.00],
];

foreach ($products as &$product) {
    $product['sku'] = '11000000';
}

unset($product);

var_dump($products);
