<?php
<<<<<<< HEAD
declare(strict_types=1);

// null の配列だけ削除したい
$flowers = array(
  "Rose",
  "Lili",
  "Jasmine",
  0,
  "Hibiscus",
  "",
  "Tulip",
  null,
  "Sun Flower",
  "Daffodil",
  "Daisy");

$flowers = array_diff($flowers, array("", 0, null));

var_dump($flowers);
=======

declare(strict_types=1);

$arr = ['a', 'b'];

$data = array_filter(
  $arr,
  function ($val) {
      return $val === 'a';
  }
);

var_dump($data);


function odd($var)
{
    // 渡された整数が奇数かどうかを返します
    return $var & 1;
}

function even($var): bool
{
    // 渡された整数が偶数かどうかを返します
    return !($var & 1);
}

$array1 = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5];
$array2 = [6, 7, 8, 9, 10, 11, 12];

echo "Odd :\n";
print_r(array_filter($array1, "odd"));

echo "Even:\n";
print_r(array_filter($array2, "even"));

//var_dump(odd(4));
//var_dump(even(4));
>>>>>>> 88a9317be0c4d1d90faeb348e261464593882d64
