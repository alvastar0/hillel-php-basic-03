<?php

/*
 * "void" означает, что функция не возвращает никаких значений.
 */

function say_hello(string $name): void
{
    if ('' === $name) {
        // return без указания значения можно использовать для преждевременного
        // выхода из функции.
        return;
    }

    echo 'Hello, ' . $name . '!' . PHP_EOL;
}
