<?php
//ДЗ на 04.11.2020  Создать форму отправки данных из которой отправляется текст с выбранной функцией//
include_once 'test.php';
?>


    <form action="" method="post">
        <input type="text" name="text1">
        <select name="nameOfFunction" id="">
            <option value="funcSpaces">Без пробелов</option>
            <option value="shortWords">Слова с 3-5 буквами</option>
            <option value="palindrome">Палиндром</option>
            <option value="longestWord">Самое длинное слово</option>
            <option value="capitalLetter">Кол-во прописных и заглавных букв</option>
        </select>
        <input type="submit" value="Выбрать">
    </form>

<?php
echo "<br>";
echo "<br>";
echo "<br>";


