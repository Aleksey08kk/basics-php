
// 49 Задание. Отрицание.

<?php

namespace HexletBasics\Logic\LogicalNegation;

use function HexletBasics\Functions\mb_strrev;

// BEGIN (write your solution here)
function isPalindrome($str){
  $strLow = strtolower($str);
  $strRev = strrev($strLow);
   return $str === $strRev;
}

function isNotPalindrome($str){
  return !isPalindrome($str);
}
// END