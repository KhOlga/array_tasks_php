<?php
# 17.Сосктавьте массив месяцев. С помощью цикла foreach выведите все месяцы, а текущий месяц выведите жирным.
# Текущий месяц должен храниться в переменной $month.

$Months = array('January', 'February', 'March', 'April', 'May',
    'June', 'July', 'August', 'September', 'October', 'November', 'December');

$nowadays = getdate();

foreach ($nowadays as $keyNov) {

    $month = $nowadays['month'];

}

foreach ($Months as $keyMon => $value) {

    if ( $value == $month) {

            echo "<b>" . $month . "</b>" . "<br>";
        }
        else {
            echo $value . "<br>";
        }


}


