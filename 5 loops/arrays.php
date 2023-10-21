<?php

//индексируемые массивы
$list[0] = 'Овощи';
$list[1] = 'Фрукты';
$list[2] = 'Ягоды';

//echo $list[1];

$list2[] = 'a';
$list2[] = 'b';
$list2[] = 'c';

//echo $list2[1];  //b
//ассоциативные массивы
$list['vegetables'] = 'Овощи';
$list['fruits'] = 'Фрукты';
$list['berries'] = 'Ягоды';

//echo $list['fruits'];

$list = [1, 3, 5, 7,];
//echo $list[2];

$list2 = ['vegetables' => 'Овощи', 'fruits' => 'Фрукты', 'berries' => 'Ягоды',];
//echo $list2['fruits'];

$a = sizeOf($list);
//var_dump($a); //4

$b = count($list2);
//var_dump($b); //3

$r = 'Hello World';
$li = explode(' ', $r);
//var_dump($li);

$list2 = explode('!', $r);
//var_dump($list2);

$list3 = [1,3,5,7];
$str = implode('&', $list3);
//echo $str;   //1&3&5&7
