<?php

$initialDeposit = 100000; // 100,000 рублей

// Создаем переменную для текущего значения депозита
$currentDeposit = $initialDeposit;

// Задаем начальную процентную ставку
$interestRate = 0.08; // 8% годовых

// Задаем интервал изменения процентной ставки
$interestRateChangeInterval = 3; // каждые 3 года

// Задаем счетчик лет
$years = 0;

// Условие для проверки, когда сумма удвоится
while ($currentDeposit < $initialDeposit * 2) {
    $years++;

    // Если прошло указанное количество лет, увеличиваем процентную ставку на 2%
    if ($years % $interestRateChangeInterval === 0) {
        $interestRate += 0.02;
    }

    // Рассчитываем прирост депозита на текущий год
    $depositIncrease = $currentDeposit * $interestRate;

    // Прибавляем прирост к текущему депозиту
    $currentDeposit += $depositIncrease;
}

// Выводим результат
echo "Через $years лет сумма на вашем депозите удвоится и составит $currentDeposit рублей.";