<?php
# 23. Вам нужно разработать программу, которая считала бы сумму цифр числа введенного пользователем.
# Например: есть число 123, то программа должна вычислить сумму цифр 1, 2, 3, т. е. 6.
# По желанию можете сделать проверку на корректность введения данных пользователем.

$number = 0;
$result = 0;
$cell = 0;

echo "Enter any number - ";
$number = trim(fgets(STDIN));
$arrayNumber = str_split($number);

foreach ($arrayNumber as $arrayNumber[$cell]) {

    $result += $arrayNumber[$cell];
}

echo $result . "\n";




?>