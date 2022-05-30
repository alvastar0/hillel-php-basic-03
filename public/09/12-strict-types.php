<?php

/*
 * Этот пример демонстрирует работу строгого режима типизации в PHP.
 *
 * При этом режиме неявное приведение типов не срабатывает, и при не
 * соответствии типа переменной PHP генерирует фатальную ошибку.
 */

declare(strict_types=1);

function calculate(int $a, int $b, string $operation)
{
    return match ($operation) {
        '+' => $a + $b,
        '-' => $a - $b,
        '*' => $a * $b,
        '/' => $a / $b
    };
}

//echo calculate('string', [], null);        // Error
//echo calculate(50.5, 50.5, '+'); // Error
echo calculate(50, 50, '+');   // Ok
