<?php

$cardNumber = random_int(6, 14);

$cardNames = [
    6  => 'Шестёрка',
    7  => 'Семёрка',
    8  => 'Восьмёрка',
    9  => 'Девятка',
    10 => 'Десятка',
    11 => 'Валет',
    12 => 'Дама',
    13 => 'Король',
    14 => 'Туз'
];

if (!isset($cardNames[$cardNumber])) {
    exit('Карты не существует!');
}

echo 'Номер карты: '.$cardNumber.PHP_EOL;
echo $cardNames[$cardNumber].PHP_EOL;
