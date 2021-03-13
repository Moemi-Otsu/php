<?php
$fruits_color = array(
        'apple' => 'red',
        'banana' => 'yellow',
        'orange' => 'orange',
);

foreach ($fruits_color as &$color) {
    $color = "black";
}
unset($color);

var_dump($fruits_color);
