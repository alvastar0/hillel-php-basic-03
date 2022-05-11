<?php

$a = [
    'name' => 'John Doe',
    'email' => 'johndoe@example.com',
];

$b = [
    'name' => 'Peter Peter',
    'age' => 20
];

$c = $a + $b;

var_dump($c);

$merged = array_merge($a, $b);

var_dump($merged);
