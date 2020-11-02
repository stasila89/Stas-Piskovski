<?php
///ДЗ от 22.10.2020
// Создать массив и вывести 5 функций по этому массиву

$arrFunctions = [1, 2, 3, 4, 5, 6, 7, 8, 9, 32, 12, 54, 87, 9996];
echo '<pre>';
print_r($arrFunctions);
echo '</pre>';

//1 функция "Вычислить произведение значений массива"
echo array_product($arrFunctions);

echo '<br>';

//2 функция "Меняет местами ключи с их значениями в массиве"

$flip = array_flip($arrFunctions);
echo '<prev>';
print_r($flip);
echo '</prev>';

echo '<br>';

//3 Функция "Извлекает первый элемент массива"

$cut = array_shift($arrFunctions);
print_r($arrFunctions);
echo '<br>';
echo $cut;
echo '<br>';

//4 Функция "Проверяет, присутствует ли в массиве указанный ключ или индекс"

if (array_key_exists('5', $arrFunctions)) {
    echo "Ключ '5' существует";
}
echo '<br>';

//5 Функция " Убирает повторяющиеся значения из массива"

$repeat = [5, 20, 15, 10, 125, 5, 80, 88, 10, 13, 14, 22, 80];
$single = array_unique($repeat);
print_r($single);
echo '<br>';
echo array_product($repeat);
echo '<br>';
echo array_product($single);



