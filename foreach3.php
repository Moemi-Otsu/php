<?php
$fruits_color = array(
        'apple' => 'red',
        'banana' => 'yellow',
        'orange' => 'orange',
);

foreach ($fruits_color as &$color) {
    $color = "black";
}

var_dump($fruits_color);

//array(3) {
//		["apple"]=>
//  string(5) "black"
//		["banana"]=>
//  string(5) "black"
//		["orange"]=>
//  &string(5) "black"
//}
