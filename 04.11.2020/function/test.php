<?php
//ДЗ на 04.11.2020 Создать файл обработчик и вывести результат выбранной функции
include_once './testFunction.php';
echo 'Без пробелов';
echo "<br>";
funcSpaces($_POST['spaces']);
echo "<br>";
echo 'Слов с буквами от 3 до 5';
echo "<br>";
shortWords($_POST['words']);
echo "<br>";
echo "Является ли палиндромом";
echo "<br>";
palindrome($_POST['sentence']);
echo "<br>";
echo 'Самое длинное слово';
echo "<br>";
longestWord($_POST['long']);
echo "<br>";
echo 'Кол-во строчных и заглавных букв';
echo "<br>";
capitalLetter($_POST['letters']);


