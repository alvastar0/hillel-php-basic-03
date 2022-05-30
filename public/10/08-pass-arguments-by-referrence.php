<?php

function append_to(string &$string, string $text): void
{
    $string .= trim(strip_tags($text)).PHP_EOL;
}

$log = '';

append_to($log, 'First line');
append_to($log, 'Second line');

//append_to('', 'First line');
