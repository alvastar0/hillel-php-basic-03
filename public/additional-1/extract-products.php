<?php

$products = [
    ['sku' => '1000011', 'price' => 1000, 'name' => 'Чайник', 'qty' => 10],
    ['sku' => '1000022', 'price' => 2000, 'name' => 'Чайник', 'qty' => 10],
    ['sku' => '1000033', 'price' => 3000, 'name' => 'Чайник', 'qty' => 10],
];

//$skues = array_map(function (array $item) {
//    return $item['sku'];
//}, $products);

$skues = array_map(fn(array $item) => $item['sku'], $products);

foreach ($skues as $sku) {
    echo 'SKU: '.$sku.PHP_EOL;
}
