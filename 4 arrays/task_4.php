<?php

$list = [
    'q' => 'прима',
    'w' => 'секунда',
    'e' => 'терция',
    'r' => 'секунда',
    't' => 'кварта',
];

$elCount = count($list); //пункт 2
$list2 = array_flip($list); //пункт 3
$el2Count = count($list2); //пункт 4

var_dump($elCount !== $el2Count);

