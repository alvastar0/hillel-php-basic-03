<?php

/*
 * Этот пример демонстрирует работу оператора "return".
 */

function calculate($a, $b, $operation)
{
    if (!is_numeric($a) || !is_numeric($b)) {
        return null;
    }

    return match ($operation) {
        '+' => $a + $b,
        '-' => $a - $b,
        '*' => $a * $b,
        '/' => $a / $b
    };
}

// Оператор return возвращает значение в управление программой в то место,
// где была вызвана функция. Это значит, что вместо функции в код
// "подставляется" значение, которое вернул "return".
echo calculate(10, 10, '*').PHP_EOL;

if (0 === calculate(5, 5, '-')) {
    echo 'This is zero'.PHP_EOL;
}
