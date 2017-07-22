<?php
/**
 * Created by PhpStorm.
 * User: okharabet
 * Date: 7/13/17
 * Time: 9:06 PM
 */
#1. Дан массив с элементами 'html', 'css', 'php', 'js', 'jq'. С помощью цикла foreach выведите эти слова в столбик.
$Array = array('html', 'css', 'php', 'js', 'jq');

foreach ( $Array as $cell) {
    echo $cell . "\n";
}