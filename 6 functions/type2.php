<?php

function displayString (string $str, int $n) : void
{
    for ($i = 0; $i < $n; $i++) {
        echo $str . PHP_EOL;
    }
    return true;
}

displayString('test string', 4);