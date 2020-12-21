<?php

$array_member_2 = [
		'本田' => [
			'heigth' =>	170,
			'hobby' => 'サッカー'
		],
		'香川' => [
				'height' => 165,
				'hobby' => 'サッカー'
		]
];

echo $array_member_2['香川']['height'];
var_dump($array_member_2);

$array_member_3 = [
		'1kumi' => [
				'本田' => [
						'height' => 170,
						'hobby' => 'サッカー'
				],
				'香川' => [
						'height' => 150,
						'hobby' => 'サッカー'
				]
		],
		'2kumi' => [
				'長友' => [
						'height' => 190,
						'hobby' => 'サッカー'
				],
				'乾' => [
						'height' => 140,
						'hobby' => 'サッカー'
				]
		]
];

echo $array_member_3['2kumi']['長友']['height'];
var_dump($array_member_3);