
// 71 Задание. Поиск стартовой позиции.

<?php

namespace HexletBasics\DeepIntoStrings\StartWith;

function startsWith($text, $substr)
{
    // BEGIN (write your solution here)
$pos = strpos($text, $substr);

if ($pos === false) {
   return false;
} else {
   return true;
}
    // END
}