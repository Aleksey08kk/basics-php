
// 47 Задание. Комбинирование операций и функций.

<?php

namespace HexletBasics\Logic\CombineExpressions;

// BEGIN (write your solution here)
function isInternationalPhone($string){
  $firstLetter = $string[0];
    $isSame = '+' === $firstLetter;
    return $isSame;
}
// END