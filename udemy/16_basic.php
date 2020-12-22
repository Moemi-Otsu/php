<?php

$height = 90; //文字

var_dump($height);

if ($height === 91) {
		echo '身長は' . $height . 'cmです';
} else {
		echo '身長は' . $height . 'cmではありません';
}

$signal = 'red';

// if文をネストしたり、elseを多用すると読みにくい
//
if ($signal === 'red') {
		echo '止まれ';
} else if($signal === 'yellow') {
		echo '一旦停止';
} else {
		echo '進む';
}

$speed = 80;

if ($signal === 'blue') {
		if ($speed >= 80) {
				echo 'スピード違反';
		}
}

if ($height >= 90) {
		echo '身長は' . $height . 'cmです。';
}

if ($height <= 90) {
		echo '身長は' . $height . 'cmになります。';
}

else {
		echo '身長は' . $height . 'cmではありません。';
}