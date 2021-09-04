<?php
declare(strict_types=1);

function add_some_extra(&$string)
{
  $string .= 'and something extra.';
}

$str = 'This is a string, ';

add_some_extra($str);

echo $str;

//function add_some_extra($string)
//{
//  echo "$string and something extra.\n";
//}
//
//$str = 'This is a string, ';
//
//add_some_extra($str);
//
//echo $str;