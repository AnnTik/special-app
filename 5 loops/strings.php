<?php

$str1 = 'Hello, world!';
echo $str1;

$str2 = 'Wanna say \'Hello, world!\'...';
echo $str2;

$str3 = 'Symbol \ called "reversed slash".';
echo $str3;

$str4 = 'Hello, world!\rIs this part on the new line?\t - No!';
echo $str4;
echo"\n";

$str5 = "Hello, \"world\"!";
echo $str5;

$str6 = "\nWhazzup?\t - Good!";
echo $str6;

$a = 25;
$str7 = "\nI am $a years old";
echo $str7;

$str = <<<EOD
\n\nHello again,
whatsup? "All right"
string by here\doc syntaxis
EOD;
echo $str;
echo "\n";

$q = 'hello';
$w = "world";
$e = $q . $w;
echo $e;
echo "\n";
$s = 'Hello';
$s .= 'World';
echo $s;
echo "\n";
echo "\n";

$t = 'hello';
var_dump($t);

$r = 'привет';
var_dump($r);

$length = strlen($r);
var_dump($length);

//для работы со строками мультибайтовой кодировки
$length2 = mb_strlen($r);
var_dump($length2);

//символы строк в коде
$st = 'hello';
$l = $st[2];
//echo $l;

$letterO = $st[strlen($st) - 1];
//echo $letterO;

$st[1] = 'E';
echo $st;
