<?php

// ==  - звіряє значення, попередньо конвертуючи його до потрібного типу.
// === - звіряє тип и само значення без попередньої конвертації.

$number = 50;
$numericString = '50';

// ---------------------------------------------------------

// TRUE, тому що число у рядку дорівнює цілому числу
var_dump($number == $numericString);

// FALSE, тому що тип string не дорівнює типу int
var_dump($number === $numericString);

// FALSE, тому що число у рядку не-не дорівнює цілому числу
var_dump($number != $numericString);

// TRUE, тому що тип string не дорівнює типу int
var_dump($number !== $numericString);
