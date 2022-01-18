<?php
declare(strict_types=1);

$aryHoge = [
    'one' => 1,
    'two' => 2,
    'three' => 3,
    'four' => 4,
    'five' => 5
];

$nums = [1, 2, 3, 4, 5];
//$nums = [];

foreach ($nums as $num) {
    $nums[] = $num * 2;
}

var_dump($nums);