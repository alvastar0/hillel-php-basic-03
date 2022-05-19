<?php

$greetings = 'Bienvenue chez nous';
//$greetings = 'Hello my friend';

$language = match (true) {
    str_contains($greetings, 'Welcome') || str_contains($greetings, 'Hello') || str_contains($greetings, 'Hi') => 'en',
    str_contains($greetings, 'Bienvenue') || str_contains($greetings, 'Bonjour') => 'fr',
};

echo $greetings.PHP_EOL;
echo $language.PHP_EOL;
