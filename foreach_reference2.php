<?php

$a = array(1, 2, 3, 17);

foreach ($a as $v) {
  echo "Current value of \$a: $v.\n";
}

$i = 0;

foreach ($a as $v) {
  echo "\$a[$i] => $v.\n";
  $i++;
}

$b = array(
  "one" => 1,
  "two" => 2,
  "three" => 2,
  "seventeen" => 17
);

foreach ($b as $k => $v) {
  echo "\$b[$k] => $v.\n";
}

$c = array();
$c[0][0] = "a";
$c[0][1] = "b";
$c[1][0] = "y";
$c[1][1] = "z";

foreach ($c as $v1) {
  foreach ($v1 as $v2) {
//    var_dump($v1);
    echo "$v2\n";
  }
}

foreach (array(1, 2, 3, 4, 5) as $v) {
  echo "$v\n";
}