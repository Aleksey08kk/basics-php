
// 45 Задание. Логический тип.

<?php

namespace HexletBasics\Logic\BoolType;

// BEGIN (write your solution here)
function isPensioner($getAge){
  $pensionerAge = 60;
  $pensioner = $getAge >= $pensionerAge;
  return $pensioner;
}
// END


