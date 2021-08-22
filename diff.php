<?php

$origin = new DateTime('2021-08-22');
$target = new DateTime('2021-08-25');

//var_dump($origin);

$interval = $origin->diff($target);

echo $interval->format('%R%a days');
