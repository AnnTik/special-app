<?php

$list = [
    'q' => 'прима',
    'w' => 'секунда',
    'e' => 'терция',
    'r' => 'секунда',
    't' => 'кварта',
];

$elCount = count($list);
$list2 = array_flip($list);

$list3 = array_values($list2); // пункт 2

$newList = array_merge($list3, ['element']); // пункт 3

$listFinal = array_merge($newList, array_values($list)); // 4
var_dump($listFinal);
