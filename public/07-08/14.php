<?php

$number = random_int(10, 30);

for ($i = 1; $i < $number; ++$i) {
    if ($i === 28) {
        echo 'STOP';
        break;
    }

    echo $i.' ';
}

echo PHP_EOL;
echo 'Done'.PHP_EOL;
