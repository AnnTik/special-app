<?php

$list1 = [
    'a' => 'string 1',
    'b' => 'string 2',
    'c' => 'string 3',
];

$list2 = array_keys($list1);
$list3 = implode(' ', $list2);
echo $list3;
