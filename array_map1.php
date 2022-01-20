<?php
declare(strict_types=1);

$aryHoge = [
    'one' => 1,
    'two' => 2,
    'three' => 3,
    'four' => 4,
    'five' => 5
];

//$aryHoge['test'] = array_map(function ($item) {
//    return $item * 2;
//}, $aryHoge);

$aryHoge['test'] = array_map(function ($item) {
    $item['count_favorite'] = $item * 2 ?? 0;
    
    return $item;
}, $aryHoge);

//var_dump($aryHoge['test']);
var_dump($aryHoge);