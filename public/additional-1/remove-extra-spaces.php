<?php

$text = 'lorem    ipsum dolor   sit  amet';

echo preg_replace('/\s{2,}/', ' ', $text).PHP_EOL;
