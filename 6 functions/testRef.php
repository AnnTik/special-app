<?php

    $numbersArray = [1, 4, 8, 7, 2, 0, 7, 3];
    $elementsNumber = count($numbersArray);

    function truncArray(&$numbersArray, $elementsNumber) //передаем &переменную по ссылке - меняет сам массив, без & выведет все индексы
    {
        for ($i = 0; $i < $elementsNumber; $i++) {
            if ($i % 2 !== 0) {
                unset($numbersArray[$i]); // удаляет нечетные "индексы элементов"
            }
        }
    }

    truncArray($numbersArray, $elementsNumber);
    print_r($numbersArray); // только четные индексы