
// 63 Задание. Формирование строк в циклах.

<?php

namespace HexletBasics\Loops\ReverseString;

// BEGIN (write your solution here)
function mysubstr($str, $num){
    $i = 0;
    // Нейтральный элемент для строк это пустая строка
    $result = '';

    while ($i < $num) {
        $currentChar = $str[$i];
        // Соединяем в обратном порядке
        $result = "{$result}{$currentChar}";
        // Тоже самое через конкатенацию
        // $result = $currentChar . $result;
        $i = $i + 1;
    }
    return $result;
}
// END
