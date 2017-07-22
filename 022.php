<?php
# 22. Нарисуйте пирамиду, как показано на рисунке, воспользовавшись циклом for или while.

# xx
# xxxx
# xxxxxx
# xxxxxxxx
# xxxxxxxxxx




for ($row = 1; $row <= 5; $row++) {

    for ($col = 1; $col <= $row; $col++) {
        echo "xx";
    }

    echo "<br>";

}


?>