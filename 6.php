<?php
$input = readline("Введите числа через пробел: ");

$arr = explode(" ", $input);

if (count($arr) < 2) {
    die("Нужно хотя бы два числа!");
}

$isZigzag = true;

for ($i = 1; $i < count($arr) - 1; $i++) {
   
    $isPeak = ($arr[$i] > $arr[$i-1] && $arr[$i] > $arr[$i+1]);
    $isValley = ($arr[$i] < $arr[$i-1] && $arr[$i] < $arr[$i+1]);

    if (!$isPeak && !$isValley) {
        $isZigzag = false;
        break;
    }
}

if ($isZigzag) {
    echo "Это зигзаг! ";
} else {
    echo "Это не зигзаг. ";
}
