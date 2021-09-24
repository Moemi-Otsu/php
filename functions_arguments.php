<?php
declare(strict_types=1);

// 結合代入演算子 .=
$output = '私は';
$output .= '太田';
$output .= 'です';
echo $output;

// 引数のリファレンス渡し
function add_some_extra(&$string)
{
  $string .= 'and something extra.';
}

$str = 'This is a string, ';
add_some_extra($str);
echo $str;

// デフォルト引数値
function makecoffee($type = "cappuccino")
{
  return "Making a cup of $type.\n";
}
//echo makecoffee();
echo makecoffee(null);