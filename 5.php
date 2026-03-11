<?php

$matrix = [
    [1, 2, 3], 
    [4, 5, 6], 
    [7, 8, 9]  
];

$sum = 0;
$n = count($matrix);

for ($i = 0; $i < $n; $i++) {
    
    $sum += $matrix[$i][$n - 1 - $i];
}

echo "Сумма элементов побочной диагонали: $sum";
?>