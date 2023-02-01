
// 48 Задание. Логические операторы.

<?php

namespace HexletBasics\Logic\LogicalOperators;

// BEGIN (write your solution here)
function isLeapYear($number){
   return $number % 400 === 0 || ($number % 4 === 0 && $number % 100 !== 0);
  
}
// END
