
// 59 Задание. Агрегация данных (Числа).

<?php

namespace HexletBasics\Loops\AgregationNumber;

// BEGIN (write your solution here)
function multiplyNumbersFromRange($start, $finish){
    $i = $start;
    $multiplication = 1; 

    while ($i <= $finish) { 
        $multiplication = $multiplication * $i; 
        $i = $i + 1; 
    }

    return $multiplication;
}
// END