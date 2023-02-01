
// 56 Задание. Конструкция Switch.

<?php

namespace HexletBasics\Conditionals\SwitchStatement;

// BEGIN (write your solution here)
function getNumberExplanation($int){
  
switch ($int) {
    case '666': 
        return 'devil number';
        break;
    case '42': 
        return 'answer for everything';
        break;
    case '7': 
        return 'prime number';
        break;
    default: null;
}
}
// END
