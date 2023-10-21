<?php

$str = "Лето пришло";
$space = strpos($str, ' ');

$str1 = substr($str, 0, $space);
var_dump($str1);

$str2 = substr($str, $space + 1);
var_dump($str2);
