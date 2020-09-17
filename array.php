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

$fruits_tajigen = array(
		'apple' => array(
				'price' => 100,
				'count' => 2,
		),
		'banana' => array(
				'price' => 80,
				'count' => 5,
		),
		'orange' => array(
				'price' => 90,
				'count' => 3,
		)
);

foreach ($fruits_tajigen as $name => $value) {
		echo "$name は１つ {$value['price']}円で、{$value['count']}個です。", PHP_EOL;
}

$a = array('a' => 1, 'b' => 3, 'c' => 5);
$b = array('a' => 1, 'c' => 5, 'b' => 3);
$c = array('a' => 1, 'b' => 2);

var_dump($a == $b);
var_dump($a === $b);

var_dump($a + $c);

var_dump($c + $a);