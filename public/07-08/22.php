<?php

$age = random_int(0, 100);

$maturity = match (true) {
    $age >= 65 => 'Пожилой',
    $age >= 25 => 'Взрослый',
    $age >= 18 => 'Совершеннолетний',
    default => 'Ребенок'
};

//if ($age >= 65) {
//    $maturity = 'Пожилой';
//} elseif ($age >= 25) {
//    $maturity = 'Взрослый';
//} elseif ($age >= 18) {
//    $maturity = 'Совершеннолетний';
//} else {
//    $maturity = 'Ребенок';
//}

echo $age.' - '.$maturity;
echo PHP_EOL;
