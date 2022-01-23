<?php

declare(strict_types=1);

// 通常の代入（値渡し）変数に代入した値の「コピー」が渡される。
// メモリの参照先は、$a と $b で別々。
$a = 1;
$b = $a;

// 参照渡し（&）をつけると、変数のシンボルの位置が渡される。
$c = 1;
$d = &$c;

echo $b, PHP_EOL;
echo $d, PHP_EOL;


// 配列の場合

// 値渡し
$array1 = array(1, 2, 3);
$array2 = $array1;
$array1[1] = 0;

var_dump($array2);
//array(3) {
//  [0]=>
//  int(1)
//  [1]=>
//  int(2)
//  [2]=>
//  int(3)
//}

// 参照渡し
$array1 = array(1, 2, 3);
$array2 = &$array1;
$array1[1] = 0;

var_dump($array2);
//array(3) {
//  [0]=>
//  int(1)
//  [1]=>
//  int(0)
//  [2]=>
//  int(3)
//}

// 関数の引数を参照渡しする場合

// 値渡し
function add1($number)
{
    return ++$number;
}

$num1 = 1;
$num2 = add1($num1);

echo $num1, PHP_EOL; // 1
echo $num2, PHP_EOL; // 2

// 参照渡し

function add2(&$number)
{
    return ++$number;
}

$num3 = 1;
$num4 = add2($num3);

echo $num3, PHP_EOL; // 2 （元の変数が書き換わっている状態）
echo $num4, PHP_EOL; // 2
