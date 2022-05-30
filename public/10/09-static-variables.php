<?php

function run(): void
{
    static $numberOfRan = 0;

    echo ++$numberOfRan.PHP_EOL;
}

run();
run();
run();
