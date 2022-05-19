<?php

$year = 30;

if ($year >= 18 && $year <= 100) {
    echo 'Correct';
}

if ($year < 18 || $year > 100) {
    echo 'Incorrect';
}
