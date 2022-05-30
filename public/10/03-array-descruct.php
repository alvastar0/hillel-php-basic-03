<?php

$array = [10, 20, 30];

//$a = $array[0];
//$b = $array[1];
//$c = $array[2];

//list($a, $b, $c) = $array;

[$a, $b, $c] = $array;

var_dump($a);
var_dump($b);
var_dump($c);
