<?php

$arr = array(1, 2, 3, 4);

foreach ($arr as &$value) {
  $value = $value * 2;
}

//var_dump($arr);

echo $arr[3];

unset($value);

//var_dump($arr);

echo $arr[3];