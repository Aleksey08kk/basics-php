
// 65 Задание. Синтаксический сахар.

<?php

namespace HexletBasics\Loops\SyntaxSugar;

// BEGIN (write your solution here)
function filterString($str, $char)
{
    $i = 0;
    $result = '';
    while ($i < strlen($str)) {
        $currentChar = $str[$i];

        if ($currentChar !== $char) {
            $result = "{$result}{$currentChar}";
        }

        $i += 1;
    }

    return $result;
}
// END