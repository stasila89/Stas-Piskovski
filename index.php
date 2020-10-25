<?php
//ДЗ от 15.10.2020

//составить логические выражения, принимающие значение true в перечисленных ниже случаях.
//1) Переменная x попадает в диапазон от –2 до 1

$x = 0;
if ($x >= -2 && $x <= 1) {
    echo "True";
} else {
    echo "False";
}

echo "<br>";


//2)Переменная x лежит в пределах диапазонов
// от минус бесконечности до минус 2 или от 1 до плюс бесконечности

$x1 = -10;
if ($x1 <= -2 || $x1 >= 1) {
    echo "True";
} else {
    echo "False";
}
echo "<br>";

//3)Переменная x лежит в пределах  диапазонов
// от минус бесконечности до минус 2 или от 1 до 3

$x2 = -1;
if ($x2 <= -2 || ($x2 >= 1 && $x2 <= 3)) {
    echo "True";
} else {
    echo "False";
}
echo "<br>";

//4а)Запишите условия, истинные, когда точка с координатами (x, y)
// лежит точно на прямой
$x3a = 0;
$y3a = 1;
if (($x3a - 2 * $y3a + 2) == 0) {
    echo "На прямой";
} else {
    echo "Не на прямой";
}
echo "<br>";
//4б)Запишите условия, истинные, когда точка с координатами (x, y)
// лежит выше прямой
$x3b = -1;
$y3b = 0;
if (($x3b - 2 * $y3b + 2) > 0) {
    echo "Выше прямой";
} else {
    echo "не выше прямой";
}
echo "<br>";

//4в)Запишите условия, истинные, когда точка с координатами (x, y)
// лежит ниже прямой
$x3c = 1;
$y3c = 2;
if (($x3c - 2 * $y3c + 2) < 0) {
    echo "Ниже прямой";
} else {
    echo "Не ниже прямой";
}
echo "<br>";
echo "<br>";
echo "<h2>Массив с товаром</h2>";
echo "<br>";
echo "<br>";

//Создвние массива товаров, вывод наличе и цены товаров
$mazdaCenter = [
    'mazda3' => [
        'color' => [
            'red' => [
                'engineCapacity' => [
                    '2.0Liters' => [
                        'price' => '16000',
                        'availability' => 'yes',],
                    '2.2Liters' => [
                        'price' => '17000',
                        'availability' => 'yes',],
                ],
            ],
            'white' => [
                'engineCapacity' => [
                    '2.0Liters' => [
                        'price' => '15500',
                        'availability' => 'yes',],
                    '2.2Liters' => [
                        'price' => '17500',
                        'availability' => 'yes',],
                ],
            ],
            'black' => [
                'engineCapacity' => [
                    '2.0Liters' => [
                        'price' => '16000',
                        'availability' => 'yes',],
                    '2.2Liters' => [
                        'price' => '18000',
                        'availability' => 'yes',],
                ],
            ],
        ],
    ],

    'mazda6' => ['color' => [
        'red' => [
            'engineCapacity' => [
                '2.0Liters' => [
                    'price' => '18000',
                    'availability' => 'yes',],
                '2.2Liters' => [
                    'price' => '20000',
                    'availability' => 'yes',],
            ],
        ],
        'white' => [
            'engineCapacity' => [
                '2.0Liters' => [
                    'price' => '18500',
                    'availability' => 'yes',],
                '2.2Liters' => [
                    'price' => '20500',
                    'availability' => 'yes',],
            ],
        ],
        'black' => [
            'engineCapacity' => [
                '2.0Liters' => [
                    'price' => '19000',
                    'availability' => 'yes',],
                '2.2Liters' => [
                    'price' => '21000',
                    'availability' => 'yes',],
            ],
        ],
    ],
    ],
    'mazdaCX5' => ['color' => [
        'red' => [
            'engineCapacity' => [
                '2.0Liters' => [
                    'price' => '22000',
                    'availability' => 'yes',],
                '2.2Liters' => [
                    'price' => '22500',
                    'availability' => 'yes',],
            ],
        ],
        'white' => [
            'engineCapacity' => [
                '2.0Liters' => [
                    'price' => '22500',
                    'availability' => 'yes',],
                '2.2Liters' => [
                    'price' => '24500',
                    'availability' => 'yes',],
            ],
        ],
        'black' => [
            'engineCapacity' => [
                '2.0Liters' => [
                    'price' => '23000',
                    'availability' => 'yes',],
                '2.2Liters' => [
                    'price' => '25000',
                    'availability' => 'yes',],
            ],
        ],
    ],
    ],
    'mazdaCX9' => ['color' => [
        'red' => [
            'engineCapacity' => [
                '2.0Liters' => [
                    'price' => '26000',
                    'availability' => 'yes',],
                '2.2Liters' => [
                    'price' => '28000',
                    'availability' => 'yes',],
            ],
        ],
        'white' => [
            'engineCapacity' => [
                '2.0Liters' => [
                    'price' => '29500',
                    'availability' => 'yes',],
                '2.2Liters' => [
                    'price' => '30500',
                    'availability' => 'yes',],
            ],
        ],
        'black' => [
            'engineCapacity' => [
                '2.0Liters' => [
                    'price' => '30000',
                    'availability' => 'yes',],
                '2.2Liters' => [
                    'price' => '35000',
                    'availability' => 'yes',],
            ],
        ],
    ],
    ],
];

if ($mazdaCenter ['mazda3']['color']['red']['engineCapacity']['2.0Liters']['availability'] == 'yes') {
    echo " Красная Mazda 3 с объемом 2.0 стоит";
    print_r($mazdaCenter['mazda3']['color']['red']['engineCapacity']['2.0Liters']['price']);
} else {
    echo "Красная Mazda 3 с объемом 2.0 литра отсутсвует в нашем регионе";
}
echo "<br>";

if ($mazdaCenter ['mazda3']['color']['red']['engineCapacity']['2.2Liters']['availability'] == 'yes') {
    echo " Красная Mazda 3 с объемом 2.2 стоит";
    print_r($mazdaCenter['mazda3']['color']['red']['engineCapacity']['2.2Liters']['price']);
} else {
    echo "Красная Mazda 3 с объемом 2.2 литра отсутсвует в нашем регионе";
}
echo "<br>";
echo "<br>";

if ($mazdaCenter ['mazda3']['color']['white']['engineCapacity']['2.0Liters']['availability'] == 'yes') {
    echo " Белая Mazda 3 с объемом 2.0 стоит";
    print_r($mazdaCenter['mazda3']['color']['white']['engineCapacity']['2.0Liters']['price']);
} else {
    echo "Белая Mazda 3 с объемом 2.0 литра отсутсвует в нашем регионе";
}
echo "<br>";

if ($mazdaCenter ['mazda3']['color']['white']['engineCapacity']['2.2Liters']['availability'] == 'yes') {
    echo " Белая Mazda 3 с объемом 2.2 стоит";
    print_r($mazdaCenter['mazda3']['color']['white']['engineCapacity']['2.2Liters']['price']);
} else {
    echo "Белая Mazda 3 с объемом 2.2 литра отсутсвует в нашем регионе";
}
echo "<br>";
echo "<br>";

if ($mazdaCenter ['mazda3']['color']['black']['engineCapacity']['2.0Liters']['availability'] == 'yes') {
    echo " Черная Mazda 3 с объемом 2.0 стоит";
    print_r($mazdaCenter['mazda3']['color']['black']['engineCapacity']['2.0Liters']['price']);
} else {
    echo "Черная Mazda 3 с объемом 2.0 литра отсутсвует в нашем регионе";
}
echo "<br>";

if ($mazdaCenter ['mazda3']['color']['black']['engineCapacity']['2.2Liters']['availability'] == 'yes') {
    echo " Черная Mazda 3 с объемом 2.2 стоит";
    print_r($mazdaCenter['mazda3']['color']['black']['engineCapacity']['2.2Liters']['price']);
} else {
    echo "Черная Mazda 3 с объемом 2.2 литра отсутсвует в нашем регионе";
}
echo "<br>";
echo "<br>";
echo "<br>";


if ($mazdaCenter ['mazda6']['color']['red']['engineCapacity']['2.0Liters']['availability'] == 'yes') {
    echo " Красная Mazda 6 с объемом 2.0 стоит";
    print_r($mazdaCenter['mazda6']['color']['red']['engineCapacity']['2.0Liters']['price']);
} else {
    echo "Красная Mazda 6 с объемом 2.0 литра отсутсвует в нашем регионе";
}
echo "<br>";

if ($mazdaCenter ['mazda6']['color']['red']['engineCapacity']['2.2Liters']['availability'] == 'yes') {
    echo " Красная Mazda 6 с объемом 2.2 стоит";
    print_r($mazdaCenter['mazda3']['color']['red']['engineCapacity']['2.2Liters']['price']);
} else {
    echo "Красная Mazda 6 с объемом 2.2 литра отсутсвует в нашем регионе";
}
echo "<br>";
echo "<br>";

if ($mazdaCenter ['mazda6']['color']['white']['engineCapacity']['2.0Liters']['availability'] == 'yes') {
    echo " Белая Mazda 6 с объемом 2.0 стоит";
    print_r($mazdaCenter['mazda6']['color']['white']['engineCapacity']['2.0Liters']['price']);
} else {
    echo "Белая Mazda 6 с объемом 2.0 литра отсутсвует в нашем регионе";
}
echo "<br>";

if ($mazdaCenter ['mazda6']['color']['white']['engineCapacity']['2.2Liters']['availability'] == 'yes') {
    echo " Белая Mazda 6 с объемом 2.2 стоит";
    print_r($mazdaCenter['mazda6']['color']['white']['engineCapacity']['2.2Liters']['price']);
} else {
    echo "Белая Mazda 6 с объемом 2.2 литра отсутсвует в нашем регионе";
}
echo "<br>";
echo "<br>";

if ($mazdaCenter ['mazda6']['color']['black']['engineCapacity']['2.0Liters']['availability'] == 'yes') {
    echo " Черная Mazda 6 с объемом 2.0 стоит";
    print_r($mazdaCenter['mazda6']['color']['black']['engineCapacity']['2.0Liters']['price']);
} else {
    echo "Черная Mazda 6 с объемом 2.0 литра отсутсвует в нашем регионе";
}
echo "<br>";

if ($mazdaCenter ['mazda6']['color']['black']['engineCapacity']['2.2Liters']['availability'] == 'yes') {
    echo " Черная Mazda 6 с объемом 2.2 стоит";
    print_r($mazdaCenter['mazda6']['color']['black']['engineCapacity']['2.2Liters']['price']);
} else {
    echo "Черная Mazda 6 с объемом 2.2 литра отсутсвует в нашем регионе";
}
echo "<br>";
echo "<br>";
echo "<br>";


if ($mazdaCenter ['mazdaCX5']['color']['red']['engineCapacity']['2.0Liters']['availability'] == 'yes') {
    echo " Красная Mazda CX5 с объемом 2.0 стоит";
    print_r($mazdaCenter['mazdaCX5']['color']['red']['engineCapacity']['2.0Liters']['price']);
} else {
    echo "Красная Mazda CX5 с объемом 2.0 литра отсутсвует в нашем регионе";
}
echo "<br>";

if ($mazdaCenter ['mazdaCX5']['color']['red']['engineCapacity']['2.2Liters']['availability'] == 'yes') {
    echo " Красная Mazda CX5 с объемом 2.2 стоит";
    print_r($mazdaCenter['mazdaCX5']['color']['red']['engineCapacity']['2.2Liters']['price']);
} else {
    echo "Красная Mazda CX5 с объемом 2.2 литра отсутсвует в нашем регионе";
}
echo "<br>";
echo "<br>";

if ($mazdaCenter ['mazdaCX5']['color']['white']['engineCapacity']['2.0Liters']['availability'] == 'yes') {
    echo " Белая Mazda CX5 с объемом 2.0 стоит";
    print_r($mazdaCenter['mazdaCX5']['color']['white']['engineCapacity']['2.0Liters']['price']);
} else {
    echo "Белая Mazda CX5 с объемом 2.0 литра отсутсвует в нашем регионе";
}
echo "<br>";

if ($mazdaCenter ['mazdaCX5']['color']['white']['engineCapacity']['2.2Liters']['availability'] == 'yes') {
    echo " Белая Mazda CX5 с объемом 2.2 стоит";
    print_r($mazdaCenter['mazdaCX5']['color']['white']['engineCapacity']['2.2Liters']['price']);
} else {
    echo "Белая Mazda CX5 с объемом 2.2 литра отсутсвует в нашем регионе";
}
echo "<br>";
echo "<br>";

if ($mazdaCenter ['mazdaCX5']['color']['black']['engineCapacity']['2.0Liters']['availability'] == 'yes') {
    echo " Черная Mazda CX5 с объемом 2.0 стоит";
    print_r($mazdaCenter['mazdaCX5']['color']['black']['engineCapacity']['2.0Liters']['price']);
} else {
    echo "Черная Mazda CX5 с объемом 2.0 литра отсутсвует в нашем регионе";
}
echo "<br>";

if ($mazdaCenter ['mazdaCX5']['color']['black']['engineCapacity']['2.2Liters']['availability'] == 'yes') {
    echo " Черная Mazda CX5 с объемом 2.2 стоит";
    print_r($mazdaCenter['mazdaCX5']['color']['black']['engineCapacity']['2.2Liters']['price']);
} else {
    echo "Черная Mazda CX5 с объемом 2.2 литра отсутсвует в нашем регионе";
}
echo "<br>";
echo "<br>";
echo "<br>";


if ($mazdaCenter ['mazdaCX9']['color']['red']['engineCapacity']['2.0Liters']['availability'] == 'yes') {
    echo " Красная Mazda CX9 с объемом 2.0 стоит";
    print_r($mazdaCenter['mazdaCX9']['color']['red']['engineCapacity']['2.0Liters']['price']);
} else {
    echo "Красная Mazda CX9 с объемом 2.0 литра отсутсвует в нашем регионе";
}
echo "<br>";

if ($mazdaCenter ['mazdaCX9']['color']['red']['engineCapacity']['2.2Liters']['availability'] == 'yes') {
    echo " Красная Mazda CX9 с объемом 2.2 стоит";
    print_r($mazdaCenter['mazdaCX9']['color']['red']['engineCapacity']['2.2Liters']['price']);
} else {
    echo "Красная Mazda CX9 с объемом 2.2 литра отсутсвует в нашем регионе";
}
echo "<br>";
echo "<br>";

if ($mazdaCenter ['mazdaCX9']['color']['white']['engineCapacity']['2.0Liters']['availability'] == 'yes') {
    echo " Белая Mazda CX9 с объемом 2.0 стоит";
    print_r($mazdaCenter['mazdaCX9']['color']['white']['engineCapacity']['2.0Liters']['price']);
} else {
    echo "Белая Mazda CX9 с объемом 2.0 литра отсутсвует в нашем регионе";
}
echo "<br>";

if ($mazdaCenter ['mazdaCX9']['color']['white']['engineCapacity']['2.2Liters']['availability'] == 'yes') {
    echo " Белая Mazda CX9 с объемом 2.2 стоит";
    print_r($mazdaCenter['mazdaCX9']['color']['white']['engineCapacity']['2.2Liters']['price']);
} else {
    echo "Белая Mazda CX9 с объемом 2.2 литра отсутсвует в нашем регионе";
}
echo "<br>";
echo "<br>";

if ($mazdaCenter ['mazdaCX9']['color']['black']['engineCapacity']['2.0Liters']['availability'] == 'yes') {
    echo " Черная Mazda CX9 с объемом 2.0 стоит";
    print_r($mazdaCenter['mazdaCX9']['color']['black']['engineCapacity']['2.0Liters']['price']);
} else {
    echo "Черная Mazda CX9 с объемом 2.0 литра отсутсвует в нашем регионе";
}
echo "<br>";

if ($mazdaCenter ['mazdaCX9']['color']['black']['engineCapacity']['2.2Liters']['availability'] == 'yes') {
    echo " Черная Mazda CX9 с объемом 2.2 стоит";
    print_r($mazdaCenter['mazdaCX9']['color']['black']['engineCapacity']['2.2Liters']['price']);
} else {
    echo "Черная Mazda CX9 с объемом 2.2 литра отсутсвует в нашем регионе";
}
echo "<br>";
echo "<br>";
echo "<br>";

//Создать индексный массива и вывести аоследний и предпоследний эелемент

$arrIndex = ['mazda3', 'mazda4', 'mazdaCX5', 'mazdaCX9', 'mazdaMX5', 'mazdaRX7', 'mazdaRX8'];
$tmp = count($arrIndex);
echo $arrIndex[$tmp - 1];
echo "<br>";
echo $arrIndex[$tmp - 2];


//ДЗ от 20.10.2020
// Вывести тоавр есть(нет) в наличии

$mazdaShop = [
    ['product' => 'mazda3', 'price' => '15000', 'availability' => 'yes',],
    ['product' => 'mazda6', 'price' => '25000', 'availability' => 'yes'],
    ['product' => 'mazdaCX5', 'price' => '27000', 'availability' => 'no'],
    ['product' => 'mazdaCX9', 'price' => '45000', 'availability' => 'yes'],
    ['product' => 'mazdaMX5', 'price' => '60000', 'availability' => 'yes'],
    ['product' => 'mazdaRX8', 'price' => '75000', 'availability' => 'no'],
];

foreach ($mazdaShop as $car) {
    if ($car ['availability'] == 'yes') {
        echo 'Есть в наличии';
        echo $car ['price'];
        echo "<br>";
    } else {
        echo 'Нет в наличии';
        echo "<br>";
    }
}

echo '<br>';
echo '<br>';
echo '<br>';

//Создать таблицу умножения
$rows = 10;
$columns = 10;

echo '<table>';

for ($tr = 1; $tr <= $rows; $tr++) {
    echo '<tr>';
    for ($th = 1; $th <= $columns; $th++) {
        echo '<th>' . $tr * $th . '</th>';
    }
    echo '</tr>';
}

echo '</table>';

echo '<br>';
echo '<br>';
echo '<br>';

//ДЗ от 22.10.2020
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


