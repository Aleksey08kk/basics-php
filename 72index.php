
// 72 Задание. Время.

<?php

namespace HexletBasics\Dates\Timestamp;

const SECONDS_IN_YEAR = 60 * 60 * 24 * 365;

function getYear($timestamp)
{
    // BEGIN (write your solution here)
    return 1970 + (int) floor($timestamp / SECONDS_IN_YEAR);
    // END
}
