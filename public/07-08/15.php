<?php

$from = random_int(10, 30);
$to = random_int(50, 80);

for ($i = $from; $i <= $to; ++$i) {
    if (0 === $i % 2) {
        continue;
    }

    echo $i.' ';
}

echo PHP_EOL;
