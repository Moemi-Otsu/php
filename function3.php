<?php
$array = array(1,2,3,4,5,);

$a = array_map(function ($v) {
    return $v * 2;
}, $array);

var_dump($a);
