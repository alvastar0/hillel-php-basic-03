<?php

$products = [
    [
        'sku' => '11000001',
        'price' => 800.00,
        'qty' => 2
    ],
    [
        'sku' => '11000002',
        'price' => 1499.00,
        'qty' => 5
    ],
];

$summary = 0;

foreach ($products as $product) {
    $summary += $product['price'] * $product['qty'];
}

echo $summary, PHP_EOL;
