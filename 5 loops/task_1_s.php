<?php

$word = "ceasar cipher";
$shift = 5;

function encryptCaesar($word, $shift)
{
    $encryptedWord = "";
    $wordLength = strlen($word);

    for ($i = 0; $i < $wordLength; $i++) {
        $char = $word[$i];
        $charCode = ord($char);

        if ($char == " ") {
            $encryptedWord .= " ";
        } else {
            $newCharCode = $charCode + $shift;

            if ($char >= 'a' && $char <= 'z') {
                if ($newCharCode > ord('z')) {
                    $newCharCode -= 26;
                }
            }
            $encryptedWord .= chr($newCharCode);
        }
    }
    return $encryptedWord;
}

$encryptedWord = encryptCaesar($word, $shift);
echo "Зашифрованное слово: $encryptedWord";

function decryptCaesar($encryptedWord, $shift)
{
    $decryptedWord = "";
    $wordLength = strlen($encryptedWord);

    for ($i = 0; $i < $wordLength; $i++) {
        $char = $encryptedWord[$i];
        $charCode = ord($char);

        if ($char == " ") {
            $decryptedWord .= " ";
        } else {
            $newCharCode = $charCode - $shift;

            if ($char >= 'a' && $char <= 'z') {
                if ($newCharCode < ord('a')) {
                    $newCharCode += 26;
                }
            }
            $decryptedWord .= chr($newCharCode);
        }
    }
    return $decryptedWord;
}

echo PHP_EOL;
$decryptedWord = decryptCaesar($encryptedWord, $shift);
echo "Расшифрованное: $decryptedWord";
