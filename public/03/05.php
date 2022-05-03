<?php

// Тип int (integer) - ціле число.
$number = 50;

var_dump($number); // -> int(50)

// Тип float (double) - дійсне число.
$floatNumber = 50.123456;

var_dump($floatNumber); // => float(50.123456)

// Тип bool (boolean) - логічний тип, який приймає тільки "TRUE" або "FALSE".
$boolean = true;
//$boolean = false;

var_dump($boolean); // -> bool(true)

// Тип string - рядки (або текст).
$singleQuotedString = 'Single quoted string';
$doubleQuotedString = "Double quoted string";

var_dump($singleQuotedString); // -> string(20) "Single quoted string"
var_dump($doubleQuotedString); // -> string(20) "Double quoted string"
