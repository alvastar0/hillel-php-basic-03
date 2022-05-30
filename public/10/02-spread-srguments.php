<?php

function sum($base, ...$numbers)
{
    $summary = $base;

    foreach ($numbers as $number) {
        if (!is_numeric($number)) {
            continue;
        }

        $summary += $number;
    }

    return $summary;
}

echo sum(0);
echo sum(0, 50, 50, 50);
echo sum(50, 50, 50);
