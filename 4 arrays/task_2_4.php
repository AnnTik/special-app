<?php

$str = "Я люблю море. Я лечу на море. Я умею плавать в море. Какое чистое море! Хочу на море. Завтра поедем на море";
$repeatedWord = "море";

$str = str_ireplace($repeatedWord, mb_strtoupper($repeatedWord), $str);
echo $str;





