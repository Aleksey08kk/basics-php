
// 67 Задание. Возврат из циклов.

<?php

namespace HexletBasics\Loops\ReturnFromLoop;

// BEGIN (write your solution here)
function hasChar($str, $simbol){
$pos = strpos($str, $simbol);


if ($pos === false) {
  
   return false;
} else {
  
    return true;
}
}
// END
