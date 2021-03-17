<?php
function abs($num)
{
    if ($num < 0) {
        return - $num;
    }
    return $num;
}

$test = abs(10);
echo $test;

// PHP Fatal error:  Cannot redeclare abs()
