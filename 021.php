<?php
# 21. Нарисуйте пирамиду, как показано на рисунке, только у вашей пирамиды должно быть 9 рядов, а не 5.
# 1
# 22
# 333
# 4444
# 55555

for ($row = 1; $row <= 9; $row++) {

    for ($col = 1; $col <= $row; ++$col) {
        echo $row;
    }
    echo "<br>";
}


?>
