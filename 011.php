<?php
#11. Выведите столбец четных чисел в промежутке от нуля до 100.

$Array = range(0,100);

foreach ($Array as $key => $value) {

    if($value % 2 == 0) {
        echo $value . "\n";
    }


}
