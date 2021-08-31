<?php

$arr = array('one', 'two', 'three', 'four', 'stop', 'five');

foreach ($arr as $val) {
  echo "$val<br />\n";
  if ($val == 'stop') {
    break;
  }
}

$i = 0;
while (++$i) {
  switch ($i) {
    case 5:
      echo "At 5<br />\n";
      break 1;
    case 10:
      echo "At 10; quitting<br />\n";
      break 2;
    default:
      break;
  }
}