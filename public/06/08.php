<?php

$name = 'John Doe';
$gender = 'male';

$helloString = 'Hello ';

if ('male' === $gender) {
    $helloString .= 'mr ';
} elseif ('female' === $gender) {
    $helloString .= 'mrs ';
}

$helloString .= $name;

echo $helloString . PHP_EOL;


