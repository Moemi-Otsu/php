<?php

declare(strict_types=1);

$area = function ($x, $y) {
    return 'Area is: ' . $x * $y;
};

$x = [1, 3, 5, 7, 9];
$y = [2, 4, 6, 8, 10];

var_dump(array_map($area, $x, $y));
