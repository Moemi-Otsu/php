<?php

$fruits = array(
		'apple',
		'banana',
		'oranje',
);

echo $fruits[0], PHP_EOL;

$fruits[] = 'apple';
$fruits[] = 'banana';
$fruits[] = 'orange';

$fruits_color = array(
		'apple' => 'red',
		'banana' => 'yellow',
		'orange' => 'orange',
);

echo $fruits_color['banana'], PHP_EOL;

$fruits_mixed = array(
		'peach',
		'blueberry',
		'apple' => 'red',
		'banana' => 'yellow',
		'orange' => 'orange',
);

echo $fruits_mixed[1], PHP_EOL;
echo $fruits_mixed['banana'], PHP_EOL;

$array = array(
		4,
		5,
		1 => "これは1",
		'string_key' => '最初の定義',
		'string_key' => '次の定義', //要素が上書きされる
);

var_dump($array);