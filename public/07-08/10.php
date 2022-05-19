<?php

$products = [
    20 => [
        'sku' => '11000001',
        'price' => 800.00,
        'qty' => 2
    ],
    70 => [
        'sku' => '11000002',
        'price' => 1499.00,
        'qty' => 5
    ],
];

foreach ($products as $product) {
    foreach ($product as $attribute => $value) {
        echo $attribute . ': ' . $value . PHP_EOL;
    }

    echo PHP_EOL;
}
