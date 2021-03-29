<?php

$my_pow = function ($times = 2) {
    return function ($v) use (&$times) {
        return pow($v, $times);
    };
};
$cube = $my_pow(3);
echo $cube(2);
