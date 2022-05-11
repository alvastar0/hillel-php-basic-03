<?php

$variable = 50;

if (isset($variable)) {
    echo 'Isset';
} else {
    echo 'Not set';
}

unset($variable);

//echo $variable;
