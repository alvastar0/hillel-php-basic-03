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

if ($firstDigit === 1) {
    $output = 'одна тисяча ';
} elseif ($firstDigit === 2) {
    $output = 'дві тисячі ';
} elseif ($firstDigit === 3) {
    $output = 'три тисячі ';
} elseif ($firstDigit === 4) {
    $output = 'чотири тисячі ';
} elseif ($firstDigit === 5) {
    $output = 'п\'ять тисяч ';
} elseif ($firstDigit === 6) {
    $output = 'шість тисяч ';
} elseif ($firstDigit === 7) {
    $output = 'сім тисяч ';
} elseif ($firstDigit === 8) {
    $output = 'вісім тисяч ';
} elseif ($firstDigit === 9) {
    $output = 'дев\'ять тисяч ';
} else {
    $output = '';
}

if ($secondDigit === 1) {
    $output .= 'сто ';
} elseif ($secondDigit === 2) {
    $output .= 'двісті ';
} elseif ($secondDigit === 3) {
    $output .= 'триста ';
} elseif ($secondDigit === 4) {
    $output .= 'чотириста ';
} elseif ($secondDigit === 5) {
    $output .= 'п\'ятсот ';
} elseif ($secondDigit === 6) {
    $output .= 'шістсот ';
} elseif ($secondDigit === 7) {
    $output .= 'сімсот ';
} elseif ($secondDigit === 8) {
    $output .= 'вісімсот ';
} elseif ($secondDigit === 9) {
    $output .= 'дев\'ятсот ';
} else {
    $output .= '';
}

if (1 === $thirdDigit) {
    if ($fourthDigit === 0) {
        $output .= 'десять доларів';
    } elseif ($fourthDigit === 1) {
        $output .= 'одинадцять доларів';
    } elseif ($fourthDigit === 2) {
        $output .= 'дванадцять доларів';
    } elseif ($fourthDigit === 3) {
        $output .= 'тринадцять доларів';
    } elseif ($fourthDigit === 4) {
        $output .= 'чотирнадцять доларів';
    } elseif ($fourthDigit === 5) {
        $output .= 'п\'ятнадцять доларів';
    } elseif ($fourthDigit === 6) {
        $output .= 'шістнадцять доларів';
    } elseif ($fourthDigit === 7) {
        $output .= 'сімнадцять доларів';
    } elseif ($fourthDigit === 8) {
        $output .= 'вісімнадцять доларів';
    } elseif ($fourthDigit === 9) {
        $output .= 'дев\'ятнадцять доларів';
    }
} else {
    if ($thirdDigit === 2) {
        $output .= 'двадцять ';
    } elseif ($thirdDigit === 3) {
        $output .= 'тридцять ';
    } elseif ($thirdDigit === 4) {
        $output .= 'сорок ';
    } elseif ($thirdDigit === 5) {
        $output .= 'п\'ятдесят ';
    } elseif ($thirdDigit === 6) {
        $output .= 'шістдесят ';
    } elseif ($thirdDigit === 7) {
        $output .= 'сімдесят ';
    } elseif ($thirdDigit === 8) {
        $output .= 'вісімдесят ';
    } elseif ($thirdDigit === 9) {
        $output .= 'дев\'яносто ';
    } else {
        $output .= '';
    }

    if ($fourthDigit === 1) {
        $output .= 'один долар';
    } elseif ($fourthDigit === 2) {
        $output .= 'два долари';
    } elseif ($fourthDigit === 3) {
        $output .= 'три долари';
    } elseif ($fourthDigit === 4) {
        $output .= 'чотири долари';
    } elseif ($fourthDigit === 5) {
        $output .= 'п\'ят доларів';
    } elseif ($fourthDigit === 6) {
        $output .= 'шість доларів';
    } elseif ($fourthDigit === 7) {
        $output .= 'сім доларів';
    } elseif ($fourthDigit === 8) {
        $output .= 'вісім доларів';
    } elseif ($fourthDigit === 9) {
        $output .= 'дев\'ять доларів';
    } else {
        $output .= 'доларів';
    }
}

echo $output.PHP_EOL;
