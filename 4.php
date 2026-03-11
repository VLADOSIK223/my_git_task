<?php
$input = readline("Введите числа через пробел: ");
$arr = explode(" ", $input); 
$isSorted = true;

for ($i = 0; $i < count($arr) - 1; $i++) {
    if ($arr[$i] > $arr[$i + 1]) {
        $isSorted = false;
        break;
    }
}


if ($isSorted) {
    echo "Массив отсортирован по возрастанию. ";
} else {
    echo "Массив НЕ отсортирован. ";
}
