<?php


$test_1 = 123;
$test_2 = 456;

$test_3 = $test_1 . $test_2;

// int型の変数を . で連結すると、型はstringになる。
var_dump($test_3);