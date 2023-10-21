<?php

    function displayString (string $str, int $n)
    {
        for ($i = 0; $i < $n; $i++) {
            echo $str . PHP_EOL;
        }
    }

    displayString('test string', 32);