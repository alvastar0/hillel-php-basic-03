<?php

function get_template_contents(string $filePath, array $variables = []): string
{
    if ([] !== $variables) {
        extract($variables, EXTR_PREFIX_ALL | EXTR_OVERWRITE, '');
    }

    ob_start();

    require $filePath;

    return ob_get_clean();
}
