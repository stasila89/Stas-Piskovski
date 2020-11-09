<?php
//ДЗ на 04.11.2020 Создать файл обработчик и вывести результат выбранной функции
include_once './testFunction.php';
if (!empty($_POST)){
    $text =$_POST['text1'];
    $nameOfFunction = $_POST['nameOfFunction'];

    if ($nameOfFunction == 'funcSpaces'){
echo "<h2> Текст без пробелов : </h2>. <br>";
return funcSpaces($text);
    }
    elseif ($nameOfFunction == 'shortWords'){
        echo "<h2> Слова с количеством от 3 до 5 букв : </h2>. <br>";
         return shortWords($text);
    }
    elseif ($nameOfFunction == 'palindrome'){
        echo "<h2> Является ли палиндромом : </h2>. <br>";
        return palindrome($text);
    }
    elseif ($nameOfFunction == 'longestWord'){
        echo "<h2> Самое длинное слово : </h2>. <br>";
        return longestWord($text);
    }
    elseif ($nameOfFunction == 'capitalLetter'){
        echo "<h2> Количество прописных и строчных букв : </h2>. <br>";
        return capitalLetter($text);
    }

}



