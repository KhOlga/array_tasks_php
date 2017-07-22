<?php
# 19. Составьте массив дней недели. С помощью цикла foreach выведите все дни недели, а текущий день выведите курсивом.
# Текущий день должен храниться в переменной $day.
$Week = array('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday',
    'Saturday', 'Sunday');

$nowadays = getdate();

foreach ($nowadays as $keyNov) {

    $day = $nowadays['weekday'];

}

foreach ($Week as $key => $d) {

    if ($d == $day) {

            echo "<i>" . $day . "</i>" . "<br>";
        }
        else {
            echo $d . "<br>";
        }
}










?>