<?php

/*
 * Строги режим обхявляется для файла. Это значит, что функция может быть
 * объявлена в нестрогом режиме, но использоваться в файле со строгим режимом.
 */

declare(strict_types=1);

require_once __DIR__ . '/13-return-void.php';

say_hello(100); // Error
say_hello((string)100); // Ok
