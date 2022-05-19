<?php

$numberOfDay = random_int(1, 7);
$dayName = '';

switch ($numberOfDay) {
    case 1:
        $dayName = 'Понедельник';
        break;
    case 2:
        $dayName = 'Вторник';
        break;
    case 3:
        $dayName = 'Среда';
        break;
    case 4:
        $dayName = 'Четверг';
        break;
    case 5:
        $dayName = 'Пятница';
        break;
    case 6:
        $dayName = 'Суббота';
        break;
    case 7:
        $dayName = 'Воскресенье';
        break;
}

echo $numberOfDay.' - '.$dayName;
echo PHP_EOL;

