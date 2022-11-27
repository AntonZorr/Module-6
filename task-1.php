<?php

$textStorage = [];

function addText($title = 0, $text = 0, &$textStorage)
{
    {
        $textStorage[] = array(
            "title" => $title,
            "text" => $text,
        );
    }
}

addText('1', 'One', $textStorage);
addText('3', 'Three', $textStorage);


//print_r($textStorage);

function removeText($index, &$textStorage)
{
    $key = $index;
    if (array_key_exists($key, $textStorage)) {
        unset($textStorage[$index]);
        $textStorage = $textStorage;
        return true;
        //echo 'Значение с ключом ' . $index . ' удалено' . PHP_EOL;
    } else {
        return false;
        //echo 'Значение с ключом ' . $index . ' не найдено.' . PHP_EOL;
    }
}

//var_dump(removeText(0, $textStorage));
//var_dump(removeText(5, $textStorage));
//print_r($textStorage);

function editText (int $index, string $newTitle ='', string $newText = '', &$textStorage) {

    $key = $index;
    if (array_key_exists($key, $textStorage)) {
        $textStorage[$key] = array(
            "title" => $newTitle,
            "text" => $newText,
        );
        return true;
    } else {
        return false;
    }
}

var_dump(editText(1, '7', 'Seven',$textStorage));
var_dump(editText(2, '7', 'Seven',$textStorage));
var_dump(editText(10, '7', 'Seven',$textStorage));
print_r($textStorage);