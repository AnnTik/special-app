<?php

$supportedOperators = ['+', '-', '*'];
$callsHistory = [];

function calculateOperation(&$history, int $a, int $b, string $operation = '+')
{
    $history[] = $a .  ' ' . $operation . ' ' . $b;
    if ($operation == '+') {
        return $a + $b;
    } elseif ($operation == '-') {
        return $a - $b;
    } elseif ($operation == '*') {
        return $a * $b;
    }
}
//echo calculateOperation($history, 3, 2, '-');

function parseOperator($userInput, $operator)
{
    $parseResult = explode($operator, $userInput);
    //die(print_r($parseResult));
    if ($parseResult && count($parseResult) == 2) {
        return ['operators' => $parseResult, 'operator' => $operator];
    }
    return false;
}

do {
    $userInput = readLine('Введите значение: '); //7+2
    if ($userInput == 'exit') {
        print_r($callsHistory);
    }
    foreach ($supportedOperators as $operator) {
        $parseResult = parseOperator($userInput, $operator);
       // die(var_dump($parseResult)); - false -
        if ($parseResult) {
            echo "Результат = " . calculateOperation($callsHistory, intval($parseResult['operators'[0]]), intval($parseResult['operators'[1]]), intval($parseResult['operator']) . PHP_EOL);
        } //приводим к типу данных int
    }
} while (true);