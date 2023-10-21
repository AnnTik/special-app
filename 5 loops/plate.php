<?php

$series = ['A', 'B']; // Возможные буквы для серии
$filteredNumbers = []; // Массив для сохранения отфильтрованных номеров

// Генерируем номера
foreach ($series as $char) {
    for ($number = 0; $number <= 999; $number++) {
        $numberStr = str_pad($number, 3, '0', STR_PAD_LEFT); // Преобразуем номер в трехзначный формат
        $licensePlate = $char . $numberStr . $char; // Формируем номер
        if (preg_match('/^(.)\1{2}$/', $numberStr)) {
            $filteredNumbers[] = $licensePlate;
        }
    }
}

// Выводим отфильтрованные номера
foreach ($filteredNumbers as $number) {
    echo $number . "\n";
}