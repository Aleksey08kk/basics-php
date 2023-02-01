
// 57 Задание. Оператор Элвис.

<?php

namespace HexletBasics\Conditionals\Elvis;

// BEGIN (write your solution here)
function generateAmount($tovar, $audit){
  $user = $tovar ?: $audit * 3;
    return $user;
}
// END
