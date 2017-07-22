<?php
/**
 * Created by PhpStorm.
 * User: okharabet
 * Date: 7/15/17
 * Time: 12:18 PM
 */
# 28. Вывести таблицу умножения с помощью двух циклов for.
echo "
    <span style='font-size: 20px; font-weight: bold'> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Multiplication table </span>
    <div style='display: flex; align-content: flex-start'>
    <table style = 'padding:5px; margin: 10px'>
";

$arrayNumbers = range(1,10);

for ($r = 0; $r <= 10; $r++) {
    echo "<tr>";

    for ($c = 0; $c <= 10; $c++) {

        $result = $c * $r;
        echo "<td style = 'padding: 7px; margin: 7px'>" . $result . "   " . "</td>";
    }
        echo "<br>";
        echo "</tr>";

}

echo "</table> </div>";




?>