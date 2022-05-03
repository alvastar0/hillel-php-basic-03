<?php

// Змінній можна призначити пусте значення. За змінною при цьому буде
// зарезервоване ім'я.
$variable = null;

// Конструкція var_dump виводить на екран (в термінал) зміст змінної.
var_dump($variable);

// Якщо змінній не надати початкового значення, така змінна буде
// неініціалізованою. Це означає, що за цією змінною не буде
// зарезервовано ім'я, що рівносильне відсутності змінної.
$undefined;

// Якщо спробувати звернутися до змінної, що не існує, виконання коду не
// перерветься, але Ви отримаєте попередження "Warning: Undefined variable
// $undefined ... .", а значення буде NULL.
var_dump($undefined);
var_dump($unknown);
