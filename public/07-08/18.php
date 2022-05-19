<?php

$month = random_int(1, 15);

echo $month.' - ';

switch ($month) {
    case 12:
    case 1:
    case 2:
        echo 'Зима';
        break;
    case 3:
    case 4:
    case 5:
        echo 'Весна';
        break;
    case 6:
    case 7:
    case 8:
        echo 'Лето';
        break;
    case 9:
    case 10:
    case 11:
        echo 'Осень';
        break;
    default:
        echo 'Ошибка ввода!';
}

echo PHP_EOL;
