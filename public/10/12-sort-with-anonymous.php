<?php

$products = [
    ['sku' => '10001', 'price' => 9000],
    ['sku' => '10002', 'price' => 400],
    ['sku' => '10003', 'price' => 5000],
];

usort($products, function (array $left, array $right): int {
    return $left['price'] <=> $right['price'];
});

var_dump($products);
