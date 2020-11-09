<?php
//ДЗ на 04.11.2020
//ДЗ на 02.11.2020 оформить в виде функций

//1)В строке текста записаны слова, разделенные пробелами в произвольном количестве.
// Сжатие текста состоит в том, что между словами оставляется по одному пробелу,
// а после последнего слова пробелы удаляются (пробелы перед первым словом сохраняются).
// Сжатый текст записать в другую переменную. Если строка содержит только пробелы, то все они сохраняются.

function funcSpaces($text)
{
    $withoutSpaces = preg_replace('/\s+/', ' ', $text); // preg_replace - Выполняет поиск и замену по регулярному выражению; \s - убирает лишние пробелы; + - убирает табы.
    return $withoutSpaces;
}

echo "<br>";
echo "<br>";
echo "<br>";

//2)В произвольном тексте найти и вывести на экран все слова длина которых
//// не менее трёх символов и не более пяти.
function shortWords($text)
{

    $text = explode("", $text); // explode — Разбивает строку с помощью разделителя
    $count = count($text);
    for ($i = 0; $i < $count; $i++) {
        if (mb_strlen($text[$i]) >= 3 and mb_strlen($text[$i]) <= 5) {
            return $text[$i];
            return "";
        }
    }
}

echo "<br>";
echo "<br>";
echo "<br>";

////3)Вводится строка. Удалить из нее все пробелы. После этого определить, является ли она палиндромом (перевертышем),
//// т.е. одинаково пишется как с начала, так и с конца.
////
function palindrome($text)
{

    $noSpaces = str_replace(' ', '', $text);
    $reverse = strrev($noSpaces);
    echo $reverse;
    echo "<br>";

    if ($noSpaces == $reverse) {
        return "Палиндром";
    } else {
        return 'Не палиндром';
    }
}

echo "<br>";
echo "<br>";
echo "<br>";

////4)Найти самое длинное слово и вывести его на экран.
////Случай, когда самых длинных слов может быть несколько, не обрабатывать.
////Можно попробовать сделать через массив

function longestWord($text)
{
    $arr = explode(" ", $text);
    $max = $arr[0];
    for ($i = 0; $i < count($arr); $i++) {
        if (mb_strlen($arr[$i]) > mb_strlen($max)) {
            $max = $arr[$i];
        }
    }
    return $max;

}

echo "<br>";
echo "<br>";
echo "<br>";
//
////5)Посчитать количество строчных и прописных букв в строке
//
function capitalLetter($text)
{
    $lowercase = preg_replace('/[A-Z|А-Я]/', '', $text);
    $numberOfLowercase = strlen(str_replace(' ', '', $lowercase));
    return 'Количетсво строчных букв  ' . $numberOfLowercase;
    echo "<br>";

    $capitalLetter = preg_replace('/[a-z|а-я]/', '', $text);
    $numberOfCapitalLetter = strlen(str_replace(' ', '', $capitalLetter));
    return 'Количество заглавных букв  ' . $numberOfCapitalLetter;
}

echo "<br>";
