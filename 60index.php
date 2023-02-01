
// 60 Задание. Агрегация данных (Строки).

<?php

namespace HexletBasics\Loops\AgregationString;

// BEGIN (write your solution here)
function joinNumbersFromRange($start, $end)
{
    $i = $start;
    $result = '';

    while ($i <= $end) {
        $result = "{$result}{$i}";
        $i = $i + 1;
    }

    return $result;
}
// END