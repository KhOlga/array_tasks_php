<?php
# 25. Ваше задание создать массив, наполнить это случайными значениями (функция rand), найти максимальное и минимальное значение
# и поменять их местами.

$Array = array();
for($i = 0; $i <= 5; $i++) {
    $Array[$i] = rand(7, 96);
}


for($i = 0; $i <= count($Array); $i++) {

    if ($Array[$i] >= $Array[0]) {
            $max = $Array[$i];
            $keyMax = $i;
        }
}

echo $keyMax . " - " . $max . "\n";

for($i = 0; $i < count($Array); $i++) {

    if ($Array[$i] <= $Array[0]) {
        $min = $Array[$i];
        $keyMin = $i;
    }
}

echo $keyMin . " - " . $min . "\n";

foreach ($Array as $key => $value) {
    if ($key == $keyMin) {
        $Array[$i] = $max;
    }

    if ($key == $keyMax) {
        $Array[$i] = $min;
    }

}

print_r($Array) . "\n";

?>