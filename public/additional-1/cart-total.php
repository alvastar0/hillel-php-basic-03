<?php

$products = [
    ['sku' => '1000011', 'price' => 1000, 'name' => 'Чайник', 'qty' => 10],
    ['sku' => '1000022', 'price' => 2000, 'name' => 'Чайник', 'qty' => 10],
    ['sku' => '1000033', 'price' => 3000, 'name' => 'Чайник', 'qty' => 10],
];

$total = array_reduce($products, function (int $curry, array $item) {
    $curry += $item['price'] * $item['qty'];

    return $curry;
}, 0);

echo $total.PHP_EOL;
