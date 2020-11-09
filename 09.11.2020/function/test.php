<?php
//ДЗ на 04.11.2020 Создать файл обработчик и вывести результат выбранной функции
include_once 'testFunction.php';
if (!empty($_POST)) {
    $text = $_POST['text1'];
    $nameOfFunction = $_POST['nameOfFunction'];

    if ($nameOfFunction == 'funcSpaces') {
        echo "<h4> Текст без пробелов : </h4> <br>";
        echo funcSpaces($text);
    } elseif ($nameOfFunction == 'shortWords') {
        echo "<h4> Слова с количеством от 3 до 5 букв : </h4> <br>";
        echo shortWords($text);
    } elseif ($nameOfFunction == 'palindrome') {
        echo "<h4> Является ли палиндромом : </h4> <br>";
        echo palindrome($text);
    } elseif ($nameOfFunction == 'longestWord') {
        echo "<h4> Самое длинное слово : </h4> <br>";
        echo longestWord($text);
    } elseif ($nameOfFunction == 'capitalLetter') {
        echo "<h4> Количество прописных и строчных букв : </h4> <br>";
        echo capitalLetter($text);
    }

}



