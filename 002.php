<?php

#2. Дан массив с элементами 1, 20, 15, 17, 24, 35.
#С помощью цикла foreach найдите сумму элементов этого массива. Запишите ее в переменную $result.

$Array = array(1, 20, 15, 17, 24, 35);
$cell = 0;
$result = 0;
foreach ($Array as $cell) {

    $result += $cell;
}

echo $result . "\n";



?>