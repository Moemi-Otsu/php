<?php

function total_intervals($unit, DateInterval ...$intervals) {
  $time = 0;
  foreach ($intervals as $interval) {
    $time += $interval->$unit;
  }
  return $time;
}

$a = new DateInterval('P1D');
$b = new DateInterval('P2D');
echo total_intervals('d', $a, $b).' days';

echo total_intervals('d', null);