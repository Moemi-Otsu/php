<?php
$fruits_color = array(
        'apple' => 'red',
        'banana' => 'yellow',
        'orange' => 'orange',
);

echo $fruits_color['apple'], PHP_EOL;

$fruits_mixed = array(
        'peach',
        'blueberry',
        'apple' => 'red',
        'banana' => 'yellow',
        'orange' => 'orange',
);

echo $fruits_mixed[0], PHP_EOL;
echo $fruits_mixed['apple'], PHP_EOL;


$array = array(
        4,
        5,
        1 => 'これは1',
        'string_key' => '最初の要素',
        'string_key' => '最後の要素',
);

var_dump($array);
