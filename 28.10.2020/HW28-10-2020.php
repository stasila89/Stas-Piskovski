//ДЗ от 28.10.2020
<?php
//1)В строке текста записаны слова, разделенные пробелами в произвольном количестве.
// Сжатие текста состоит в том, что между словами оставляется по одному пробелу,
// а после последнего слова пробелы удаляются (пробелы перед первым словом сохраняются).
// Сжатый текст записать в другую переменную. Если строка содержит только пробелы, то все они сохраняются.

$spaces = ' Hello    my name   is Stas    ,   and I\'m living  in     Minsk  ';
$withoutSpaces = preg_replace('/\s+/', ' ', $spaces); // preg_replace - Выполняет поиск и замену по регулярному выражению; \s - убирает лишние пробелы; + - убирает табы.
var_dump($withoutSpaces);
echo "<br>";
$withoutRightSpace = rtrim($withoutSpaces);
var_dump($withoutRightSpace);

echo "<br>";
echo "<br>";
echo "<br>";

//2)В произвольном тексте найти и вывести на экран все слова длина которых
// не менее трёх символов и не более пяти.

$shotWords = 'There are a lot of words in the world, some of them are short and other are long';
$array = explode(" ", $shotWords); // explode — Разбивает строку с помощью разделителя
$count = count($array);
for ($i = 0; $i < $count; $i++) {
    if (strlen($array[$i]) >= 3 and strlen($array[$i]) <= 5) {
        echo $array[$i];
        echo " ";
    }
}

echo "<br>";
echo "<br>";
echo "<br>";

//3)Вводится строка. Удалить из нее все пробелы. После этого определить, является ли она палиндромом (перевертышем),
// т.е. одинаково пишется как с начала, так и с конца.

$sentence = 'some men interpret nine memos';
$noSpaces = str_replace(' ', '', $sentence);
$reverse = strrev($noSpaces); //mb_ - используется для кирилицы, но почему-то не получается((
echo $noSpaces;
echo "<br>";
echo $reverse;
echo "<br>";

if ($noSpaces == $reverse){
    echo "<h1> $reverse </h1>";
}else {
    echo 'Не является перевертышем';
}

echo "<br>";
echo "<br>";
echo "<br>";

//4)Найти самое длинное слово и вывести его на экран.
//Случай, когда самых длинных слов может быть несколько, не обрабатывать.

$longestWord= 'Here are some long words in English - Psychotomimetic and Incomprehensibilities';
$arr = explode(" ", $longestWord);
$max = $arr[0];
for ($i = 0; $i < count($arr); $i++) {
    if (strlen($arr[$i]) > strlen($max)) {
        $max = $arr[$i];
    }
}
echo $max;

echo "<br>";
echo "<br>";
echo "<br>";

//5)Посчитать количество строчных и прописных букв в строке

$letters = 'FrOM big LETTers usuALy startS  seNtencE';
$lowercase =  preg_replace('/[A-Z|А-Я]/','',$letters); // Ищем и убираем заглавные буквы
$numberOfLowercase = strlen(str_replace(' ', '', $lowercase));
echo 'Количетсво строчных букв ' . $numberOfLowercase;
echo "<br>";

$capitalLetter = preg_replace('/[a-z|а-я]/','',$letters);
$numberOfCapitalLetter = strlen(str_replace(' ', '', $capitalLetter));
echo 'Количество заглавных букв ' . $numberOfCapitalLetter;