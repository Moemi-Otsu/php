<?php
$fruits = 1;
$fruits[] = 'apple'; // Cannot use a scalar value as an array

$one = array(
        1,
        1.0,
        '1',
);

echo $one[1];
