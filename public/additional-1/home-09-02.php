<?php

$number = random_int(0, 9999);

echo 'Number: '.$number.PHP_EOL;

if (0 === $number) {
    exit('Нема доларів');
}

$firstDigit  = (int) ($number / 1000) % 10;
$secondDigit = (int) ($number / 100) % 10;
$thirdDigit  = (int) ($number / 10) % 10;
$fourthDigit = $number % 10;

switch ($firstDigit) {
    case 1:
        $output = 'одна тисяча ';
        break;
    case 2:
        $output = 'дві тисячі ';
        break;
    case 3:
        $output = 'три тисячі ';
        break;
    case 4:
        $output = 'чотири тисячі ';
        break;
    case 5:
        $output = 'п\'ять тисяч ';
        break;
    case 6:
        $output = 'шість тисяч ';
        break;
    case 7:
        $output = 'сім тисяч ';
        break;
    case 8:
        $output = 'вісім тисяч ';
        break;
    case 9:
        $output = 'дев\'ять тисяч ';
        break;
    default:
        $output = '';
        break;
}

switch ($secondDigit) {
    case 1:
        $output .= 'сто ';
        break;
    case 2:
        $output .= 'двісті ';
        break;
    case 3:
        $output .= 'триста ';
        break;
    case 4:
        $output .= 'чотириста ';
        break;
    case 5:
        $output .= 'п\'ятсот ';
        break;
    case 6:
        $output .= 'шістсот ';
        break;
    case 7:
        $output .= 'сімсот ';
        break;
    case 8:
        $output .= 'вісімсот ';
        break;
    case 9:
        $output .= 'дев\'ятсот ';
        break;
    default:
        $output .= '';
        break;
}

if (1 === $thirdDigit) {
    switch ($fourthDigit) {
        case 0:
            $output .= 'десять доларів';
            break;
        case 1:
            $output .= 'одинадцять доларів';
            break;
        case 2:
            $output .= 'дванадцять доларів';
            break;
        case 3:
            $output .= 'тринадцять доларів';
            break;
        case 4:
            $output .= 'чотирнадцять доларів';
            break;
        case 5:
            $output .= 'п\'ятнадцять доларів';
            break;
        case 6:
            $output .= 'шістнадцять доларів';
            break;
        case 7:
            $output .= 'сімнадцять доларів';
            break;
        case 8:
            $output .= 'вісімнадцять доларів';
            break;
        case 9:
            $output .= 'дев\'ятнадцять доларів';
            break;
    }
} else {
    switch ($thirdDigit) {
        case 2:
            $output .= 'двадцять ';
            break;
        case 3:
            $output .= 'тридцять ';
            break;
        case 4:
            $output .= 'сорок ';
            break;
        case 5:
            $output .= 'п\'ятдесят ';
            break;
        case 6:
            $output .= 'шістдесят ';
            break;
        case 7:
            $output .= 'сімдесят ';
            break;
        case 8:
            $output .= 'вісімдесят ';
            break;
        case 9:
            $output .= 'дев\'яносто ';
            break;
        default:
            $output .= '';
            break;
    }

    switch ($fourthDigit) {
        case 1:
            $output .= 'один долар';
            break;
        case 2:
            $output .= 'два долари';
            break;
        case 3:
            $output .= 'три долари';
            break;
        case 4:
            $output .= 'чотири долари';
            break;
        case 5:
            $output .= 'п\'ят доларів';
            break;
        case 6:
            $output .= 'шість доларів';
            break;
        case 7:
            $output .= 'сім доларів';
            break;
        case 8:
            $output .= 'вісім доларів';
            break;
        case 9:
            $output .= 'дев\'ять доларів';
            break;
        default:
            $output .= 'доларів';
            break;
    }
}

echo $output.PHP_EOL;
