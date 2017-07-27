<?php
# 25. Ваше задание создать массив, наполнить это случайными значениями (функция rand), найти максимальное и минимальное значение
# и поменять их местами.

$Array = array();
for($i = 0; $i <= 5; $i++) {
    $Array[$i] = rand(7, 96);
} # заповнила масив
print_r($Array) . "\n\n"; # вивела в консоль

$min = min($Array);
$max = max($Array);

echo "Min number " . $min . "\n";
echo "Max number " . $max . "\n\n";

foreach ($Array as $key => $value) {
    if($value == $min) {
        $keyMin = $key;

    }

    if($value == $max) {
        $keyMax = $key;

    }

}


foreach ($Array as $key => $value) {

    if($key == $keyMin) {
        $Array[$keyMin] = $max;

    }

    if($key == $keyMax) {
        $Array[$keyMax] = $min;

    }

}

echo "\n";
print_r($Array) . "\n"; # виводить масив в тому ж вигляді, що і до перестановки місцями мінімального та максимального значень. Не виходить це виправити.


?>