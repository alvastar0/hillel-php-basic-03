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

for ($i = 0; $i < count($products); ++$i) {
    $summary += $products[$i]['price'] * $products[$i]['qty'];
}

echo $summary, PHP_EOL;
