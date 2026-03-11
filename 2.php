<?php

$sum = (float)readline("Введите сумму покупки: ");

if ($sum >= 10000) {
   
    $discount = 20;
    $finalSum = $sum * 0.8;
} elseif ($sum >= 5000) {
    
    $discount = 10;
    $finalSum = $sum * 0.9;
} else {
   
    $discount = 0;
    $finalSum = $sum;
}

echo "--------------------------\n";
echo "Сумма покупки: $sum\n";
echo "Ваша скидка: $discount%\n";
echo "Итого к оплате: $finalSum\n";
?>