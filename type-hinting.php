<?php
function array_output(array $var)
{
    if (is_array($var)) {
        foreach ($var as $v) {
            echo $v, PHP_EOL;
        }
    }
}

$array = array(1, 2, 3,);
array_output($array); // 1 2 3
array_output(1); // 配列ではないので、Catchable Fatal Error
