<?php

$month = random_int(1, 15);

$monthName = match ($month) {
    1, 2, 12 => 'Зима',
    3, 4, 5 => 'Весна',
    6, 7, 8 => 'Лето',
    9, 10, 11 => 'Осень',
    default => 'Ошибка ввода!'
};

echo $month.' - '.$monthName;
echo PHP_EOL;
