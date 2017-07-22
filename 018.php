<?php
# 18. Составьте массив дней недели.
# С помощью цикла foreach выведите все дни недели, выходные дни следует вывести жирным.

$Week = array('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday',
    'Saturday', 'Sunday');

foreach ($Week as $key => $day) {

    if ($key <= 4) {
        echo $day . "<br>";

    }

    if ($key == 5 || $key == 6) {
        echo "<b>" . $day . "</b>" . "<br>";

    }

}
?>