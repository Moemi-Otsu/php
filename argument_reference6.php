<?php
declare(strict_types=1);

// ... このカンマ３つが可変長引数
// 引数の個数を変更してくれるもの

function sum(...$numbers) {
  $acc = 0;
  foreach ($numbers as $n) {
    $acc += $n;
  }
  return $acc;
}

echo sum(1, 2, 3, 4);

echo PHP_EOL;

// 他の例

function add($a, $b) {
  return $a + $b;
}

echo add(...[1, 2]). "\n";

$a = [1, 2];
echo add(...$a);