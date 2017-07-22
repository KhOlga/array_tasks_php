<?php
#4. Дан массив $arr. С помощью первого цикла foreach выведите на экран столбец ключей,
#с помощью второго — столбец элементов.

$arr = array(
    'green'=>'зеленый',
    'red'=>'красный',
    'blue'=>'голубой');

$value = 0;
$key = ' ';

foreach ($arr as $key => $value) {
    echo $key . "\n";
}

echo "\n";

foreach ($arr as $key  => $value) {
    echo $value . "\n";
}



?>
