<?php

function displayParameters ($a, $b, $c = 0)
{
    echo $a . ' ' . $b . ' ' . $c . PHP_EOL;
}

displayParameters(2, 1, 8);