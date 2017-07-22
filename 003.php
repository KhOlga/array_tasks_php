<?php
#3. Дан массив с элементами 26, 17, 136, 12, 79, 15.
#С помощью цикла foreach найдите сумму квадратов элементов этого массива. Результат запишите переменную $result.

$Array = array (26, 17, 136, 12, 79, 15);
$cell = 0;
$result = 0;

foreach ($Array as $Array[$cell]) {
    $result += ($Array[$cell] * $Array[$cell]);

    echo $result . "\n";

}

echo "\n" . $result . "\n";

?>