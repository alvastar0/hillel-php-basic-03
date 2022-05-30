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

//echo sum(0, [10, 20, 30]);
echo sum(0, ...[10, 20, 30]);
