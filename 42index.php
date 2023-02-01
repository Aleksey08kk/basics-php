
// 42 Задание. Параметры функций.

<?php

namespace HexletBasics\DefineFunctions\Parameters;

// BEGIN (write your solution here)
function truncate($str, $length)
{
    $cuttedString = substr($str, 0, $length);
    return "{$cuttedString}...";
}
// END