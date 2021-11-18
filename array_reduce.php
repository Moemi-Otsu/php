<?php

declare(strict_types=1);

$array = [1, 2, 3, 4, 5];

function sum($carry, $item)
{
    $carry += $item;
    return $carry;
}

$response = array_reduce($array, "sum", 1);

var_dump($response);
