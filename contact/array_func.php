<?php

$list = [
    'a' => 'word a',
    'b' => 'word b',
    'c' => 'word c',
];

$list1 = array_keys($list); //массив ключей, список ключей
//var_dump($list1);
$list2 = array_values($list); //список значений в кач-ве результата
//var_dump($list2);
//слияние массивов
$list1 = [
    'a' => 'word a',
    'b' => 'word b',
];
$list2 = [
    'c' => 'word C',
    'd' => 'word D',
    'a' => 'word A2', //перезапишет первое
];

$list = array_merge($list1, $list2);
//var_dump($list);

$list1 = ['a', 'b', 'c'];
$list2 = ['d', 'e', 'a'];
//var_dump($list);

$keys = ['a', 'b', 'c'];
$values = ['word a', 'word b', 'word c'];
$list = array_combine($keys, $values);
//var_dump($list);

$list = [
    'a' => 'word a',
    'b' => 'word b',
    'c' => 'word a',
];
$list2 = array_flip($list); //ключи со значениями поменяны местами
//var_dump($list2);

$list = ['a', 'b', 'c', 'd'];
$list2 = array_reverse($list);
//var_dump($list2); // d c b a

$list = [
    'a' => 'word a',
    'b' => 'word b',
    'c' => 'word c',
];
$list2 = array_reverse($list);
//var_dump($list2);

$list3 = array_reverse($list, true);
//var_dump($list3);

$list = ['a', 'b', 'c', 'd'];
$hasLetter = in_array('b', $list);
//var_dump($hasLetter); //true

$list = ['a', 'b', 'c', 'd'];
$hasLetter = array_search('b', $list);
//var_dump($hasLetter); //int(1)

$list = [
    'a' => 'word a',
    'b' => 'word b',
];

$indexWord = array_search('word b', $list);
var_dump($indexWord);