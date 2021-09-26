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
echo makecoffee('espresso');

// スカラー型以外をデフォルト値として使用する

function makecoffee2($types = array("cappuccino"), $cofeeMaker = NULL)
{
  $device = is_null($cofeeMaker) ? "hands" : $cofeeMaker;
  return "Making a cup of ".join(", ", $types)." with $device.\n";
}

echo makecoffee2();
echo makecoffee2(array("cappuccino", "lavazza"), "teapot");

function makeyogurt($flavour, $type = "acidophilus")
{
  return "Making a bowl of $type $flavour.\n";
}

echo makeyogurt("raspberry");
echo makeyogurt("raspberry", "aaa");