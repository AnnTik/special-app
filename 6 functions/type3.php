<?php

function displayString (string $str, int $n)
{
    $resultArray = [];
    for ($i = 0; $i < $n; $i++) {
        $resultArray[$i] = $str . PHP_EOL;
    }
    return '';
}

$resultArray = displayString('test string', 4);

foreach ($resultArray as $result) {
    echo $result . PHP_EOL;
}