<?php
#13. Вывести таблицу умножения

$col = 10;
$row = 10;
$c = 1;

echo "
    <span style='font-size: 20px; font-weight: bold'> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Multiplication table </span>
    <div style='display: flex; align-content: flex-start'>
    <table style = 'padding:5px; margin: 10px'>
";

while($c < $col) {

    echo "<tr>";

    $r = 1;

    while($r < $row) {
        $result = $c * $r;
        echo "<td style = 'padding: 7px; margin: 7px'>" . $result . "   " . "</td>";
        $r++;
    }

    echo "<br>";
    echo "</tr>";
    $c++;
}

echo "</table> </div>";

?>