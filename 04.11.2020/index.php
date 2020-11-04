<?php
//ДЗ на 04.11.2020  Создать форму отправки данных из которой отправляется ыыеденная строка и выбранная функция//
?>

<form action="/function/test.php" method="post">

    <h1>Предложения без пробелов</h1>
    <input type="text" name="spaces">
    <h1>Слова с количеством букв от 3 до 5</h1>
    <input type="text" name="words">
    <h1>Палиндром</h1>
    <input type="text" name="sentence">
    <h1>Самое длинное слово</h1>
    <input type="text" name="long">
    <h1>Колличество строчных и прописных букв</h1>
    <input type="text" name="letters">
    <h1></h1>
    <button type="submit"> Send </button>
</form>




