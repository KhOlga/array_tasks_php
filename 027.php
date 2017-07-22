<?php
# 27. Создать генератор случайных таблиц. Есть переменные: $row - кол-во строк в таблице, $cols - кол-во столбцов в таблице.
# Есть список цветов, в массиве: $colors = array('red','yellow','blue','gray','maroon','brown','green').
# Необходимо создать скрипт, который по заданным условиям выведет таблицу размера $rows на $cols,
# в которой все ячейки будут иметь цвета, выбранные случайным образом из массива $colors. В каждой ячейке должно находиться случайное число.

$rows = 0;
$cols = 0;
$colors = array('red','yellow','blue','gray','maroon','brown','green');

echo "
    <div style='display: flex; align-content: flex-start'>
    <table style = 'padding:5px; margin: 10px'>
";

for ($rows = 0; $rows <= 5; $rows++) {
    echo "<tr>";

    for ($cols = 0; $cols <= 5; $cols++) {
        $i = rand(0, 6);
        $filler = rand(1, 100000);
        echo "<td style = 'background-color:" . $colors[$i] ."''>" . $filler;
        echo "</td>";
    }
    echo "<br>";
    echo "</tr>";

}

echo "</table> </div>";


