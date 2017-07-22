<?php
# 24. Вам нужно разработать программу, которая считала бы количество вхождений какой­нибуть выбранной вами цифры в выбранном вами числе.
# Например: цифра 5 в числе 442158755745 встречается 4 раза.

$number = 0;
$result = 0;
$cell = 0;
$verifier = 0;

echo "Enter any number - ";
$number = trim(fgets(STDIN));
$arrayNumber = str_split($number);

echo "Enter any digit - ";
$verifier = trim(fgets(STDIN));

foreach ($arrayNumber as $arrayNumber[$cell]) {
    if ($arrayNumber[$cell] == $verifier) {
        $counter = 1;
        $counter++;

    }
}
echo "Digit " . $verifier . " is founds in number " . $number . " " . $counter . " " . "time(s)\n";













?>