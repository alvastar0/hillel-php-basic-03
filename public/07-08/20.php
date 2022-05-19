<?php

$numberOfDay = random_int(1, 7);

$dayName = match ($numberOfDay) {
    1 => 'Понедельник',
    2 => 'Вторник',
    3 => 'Среда',
    4 => 'Четверг',
    5 => 'Пятница',
    6 => 'Суббота',
    7 => 'Воскресенье',
};

echo $numberOfDay.' - '.$dayName;
echo PHP_EOL;
