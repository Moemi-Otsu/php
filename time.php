<?php

//$now = new DateTime();
//
//$now2 = new DateTime();
//
//$modify = $now2->modify('+1 hour');
//
//$diff = $now->diff($now2);
//
////print $diff->format('Y年n月d日 H:i:s');
//
//print $diff->h;

$date = new DateTime();
$date->setDate(2021, 6, 12);
echo $date->format('Y-m-d H:i:s');