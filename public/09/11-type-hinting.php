<?php

/*
 * Этот пример демонстрирует объявление типов у аргументов функции и возвращаемого значения.
 */

function calculate(int|float $a, int|float $b, string $operation): int|float
{
    return match ($operation) {
        '+' => $a + $b,
        '-' => $a - $b,
        '*' => $a * $b,
        '/' => $a / $b,
        default => $a + $b
    };
}

// Ошибка из-за невозможности неявного приведения типов
//echo calculate(10, [], null);

// Ошибки нет, но результат будет неверный из-за неявного приведения к int
echo calculate(50.5, 50.5, '+');
