<?php

for ($i = 0; $i < 10; ++$i) {
    for ($k = 0; $k < 10; ++$k) {
        echo 'K-Cycle'.PHP_EOL;

        break 2;
    }

    echo 'I-Cycle'.PHP_EOL;
}
