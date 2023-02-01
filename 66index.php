
// 66 Задание. Инкремент и декремент.

<?php

namespace HexletBasics\Loops\Mutators;

// BEGIN (write your solution here)
function makeItFunny($str, $n)
{
    $i = 0;
    $result = '';
    while ($i < strlen($str)) {
        $currentChar = $str[$i];
        if (($i + 1) % $n === 0) {
            $upperChar = strtoupper($currentChar);
            $result = "{$result}{$upperChar}";
        } else {
            $result = "{$result}{$currentChar}";
        }
        $i++;
    }

    return $result;
}
// END