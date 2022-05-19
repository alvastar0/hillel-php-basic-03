<?php

$finger = random_int(1, 5);

switch ($finger) {
    case 1:
        echo 'Указательный';
        break;
    case 2:
        echo 'Средний';
        break;
    case 3:
        echo 'Безымянный';
        break;
    case 4:
        echo 'Мизинец';
        break;
    case 5:
        echo 'Большой';
        break;
}

echo PHP_EOL;
