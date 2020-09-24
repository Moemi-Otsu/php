<?php

//$i = 10;
//while ($i < 10) {
//		echo $i, PHP_EOL;
//		$i++;
//}
//
//$a = 10;
//do {
//		echo $a, PHP_EOL;
//		$a++;
//} while ($a < 10);

//$array = array(1, 2, 3, 4, 5,);
//for ($i = 0, $end = count($array); $i < $end; ++$i) {
//		echo $array[$i], PHP_EOL;
//}

// foreach 反復時にキー取得
//$fruits_color = array(
//		'apple' => 'red',
//		'banana' => 'yellow',
//		'orange' => 'orange',
//);
//
//foreach ($fruits_color as $name => $color) {
//		echo "$name is $color", PHP_EOL;
//}

// break
// break構文は、特定の条件時に反復を終わらせたい場合に使用
//$dice = range(1, 6);
//shuffle($dice);
//foreach ($dice as $value) {
//		echo $value, PHP_EOL;
//		if($value === 6) {
//				break;
//		}
//}

// continue
// continue構文は、現在の繰り返し処理を途中で終了し、次の繰り返し処理をする場合に用いられる。
// 奇数の時にはcontinueで現在の反復処理を終了して、次への処理を行い、偶数の時のみ出力を行う。
$dice = range(1, 6);
shuffle($dice);
foreach ($dice as $value) {
		if ($value % 2 !== 0) {
				continue;
		}
		echo $value, PHP_EOL;
}
