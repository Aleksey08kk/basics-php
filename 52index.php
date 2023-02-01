
// 52 Задание. Условная конструкция (if).

<?php

namespace HexletBasics\Conditionals\IfStatement;

// BEGIN (write your solution here)
function guessNumber($int){
  $num = 42;
  if($int === $num){
    return 'You win!';
  }
    return 'Try again!';
}
// END
