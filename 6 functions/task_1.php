<?php

$textStorage = [];

function add($title, $text, &$textStorage) {
    $newText = ['title' => $title, 'text' => $text];
    $textStorage[] = $newText;
}

add('Инструкция', 'Содержимое инструкции', $textStorage);
add('Регламент', 'Содержимое регламента', $textStorage);

print_r($textStorage);

function remove($i, &$textStorage)
{
    if (isset($textStorage[$i])) {
        unset($textStorage[$i]);
        return true;
    }
    return false;
}

$result = remove(0, $textStorage);
$result2 = remove(5, $textStorage);
echo "Первый запуск: " . " " . $result . PHP_EOL;
echo "Второй запуск: " . " " . $result2;

print_r($textStorage);

function edit($i, string $newTitle, string $newText, &$textStorage) : bool
{
    if (isset($textStorage[$i])) {
        $textStorage[$i]['title'] = $newTitle;
        $textStorage[$i]['text'] = $newText;
        return true;
    }
    return false;
}

edit(1,'Обновленная инструкция', 'Новое содержимое инструкции', $textStorage);
print_r($textStorage);

$result3 = edit(5, 'Обновленная инструкция', 'Новое содержимое инструкции', $textStorage);
echo 'Результат: ' . ($result3 ? 'Успех' : 'Не найдено') . PHP_EOL;
