<?php

$numbers = [5, 10, 20, 4, 3, 1, 74];
$sum = 0;

foreach ($numbers as $number) {
    if ($number % 5 !== 0){
        continue;
    }
    $sum += $number;  //для всех чисел, которые не делятся на 5 мы не применяли это условие
}

echo $sum;