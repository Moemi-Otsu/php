<?php

function double($i) {
  return $i * 2;
}

$b = $a = 5;

echo $c = $a++, PHP_EOL;

echo $e = $d = ++$b, PHP_EOL;

echo $f = double($d++), PHP_EOL;

echo $g = double(++$e), PHP_EOL;

echo $h = $g += 10, PHP_EOL;

echo $g;