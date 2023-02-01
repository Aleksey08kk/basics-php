
// 68 Задание. Цикл For.

<?php

namespace HexletBasics\Loops\ForLoop;

// BEGIN (write your solution here)
function sumOfSeries($start, $finish){
$result = 0;

    for ($i = $start; $i <= $finish; $i++) {
        $result += $i;
    }
    return $result;
}
// END