<?php
#6. Дан массив $arr. С помощью цикла foreach запишите английские названия в массив $en, а русские — в массив $ru.
#$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
#$en = array('green', 'red','blue'); $ru = array('зеленый', 'красный', 'голубой');

$arr = array(
    'green'=>'зелений',
    'red'=>'червоний',
    'blue'=>'блакитний'
);

$en = array( );
$ua = array( );
$i = ' ';
$j = ' ';

foreach ($arr as $valueEn => $valueUa ) {
    $en[$i] = $valueEn;
    echo $en[$i]. "\n";
}

echo "\n";

foreach ($arr as $valueEn => $valueUa ) {
    $ua[$j] = $valueUa;
    echo $ua[$j]. "\n";
}



?>