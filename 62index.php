
// 62 Задание. Условия внутри тела цикла.

<?php

namespace HexletBasics\Loops\ConditionsInsideLoops;

// BEGIN (write your solution here)
function countChars($str, $char)
{
    $i = 0;
    $count = 0;
  $strLower = strtolower($str);
  $charLower = strtolower($char);
  print_r($strLower);
    while ($i < strlen($strLower)) {
        if ($strLower[$i] === $charLower) {
            $count = $count + 1;
        }
        $i = $i + 1;
    }
    return $count;
}
// END
