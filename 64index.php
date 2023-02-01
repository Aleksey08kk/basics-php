
// 64 Задание. Пограничные случаи.

<?php

namespace HexletBasics\Loops\EdgeCases;

// BEGIN (write your solution here)
function isArgumentsForSubstrCorrect($str, $start, $length)
{
    $stringLength = strlen($str);

    if ($start < 0) {
        return false;
    } elseif ($length < 0) {
        return false;
    } elseif ($start >= $stringLength) {
        return false;
    } elseif ($start + $length > $stringLength) {
        return false;
    }

    return true;
}
// END