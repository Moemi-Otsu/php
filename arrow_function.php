<?php

$y = 1;
// $fn2と同じ動き
$fn1 = fn($x) => $x + $y;
// $fn1と同じ動き
$fn2 = function ($x) use ($y) {
  return $x + $y;
};
var_export($fn1(3));