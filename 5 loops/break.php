<?php

$testStr = 'abracadabra';

$exampleStrLen = strlen($testStr);

for ($i = 0; $i < $exampleStrLen; $i++) {
    if ($testStr[$i] === 'b') {
        break;   //$i = $exampleStrLen;
    }
}

echo $i + 1;
