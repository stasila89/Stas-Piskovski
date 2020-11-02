<?php
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
