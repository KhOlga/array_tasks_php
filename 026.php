<?php

# 26. Вам нужно создать массив и заполнить его случайными числами от 1 до 100 (ф­я rand).
# Далее, вычислить произведение тех элементов, которые больше ноля и у которых парные индексы.
# После вывести на экран элементы, которые больше ноля и у которых не парный индекс.

$Array = array();
$newArray = array();

for($i = 0; $i <= 10; $i++) {
    $Array[$i] = rand(1, 100);

    if($Array[$i] > 0 && ($i % 2) == 0) {

        echo "[" . $i . "]" . " => " . $Array[$i] . "\n";

        $newArray[] = $Array[$i];
    }

}

$result = array_product($newArray);
echo "\n" . $result . "\n\n";

foreach($Array as $key => $value) {
    if($value > 0 && ($key % 2) != 0) {
        echo "[" . $key . "]" . " => " . $value . "\n";
    }
}