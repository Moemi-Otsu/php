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
//$dice = range(1, 6);
//shuffle($dice);
//foreach ($dice as $value) {
//		if ($value % 2 !== 0) {
//				continue;
//		}
//		echo $value, PHP_EOL;
//}


// switch
//$hour = date('G'); //現在の時刻を取得
//if ($hour === '6') {
//		echo "朝の6時です、おはようございます。", PHP_EOL;
//} elseif ($hour === '12') {
//		echo "正午ですこんにちは。", PHP_EOL;
//} elseif ($hour === '15'){
//		echo "3時のおやつの時間です。", PHP_EOL;
//} else {
//		echo "どうも", PHP_EOL;
//}

//$hour = date('G');
//switch ($hour) {
//		case '6':
//				echo "朝の6時です、おはようございます。", PHP_EOL;
//				break;
//		case '12':
//				echo "正午ですこんにちは。", PHP_EOL;
//				break;
//		case '15':
//				echo "3時のおやつの時間です。", PHP_EOL;
//				break;
//		case '22':
//		case '23':
//		case '0':
//				echo "もう寝る時間です。", PHP_EOL;
//				break;
//		default:
//				echo "どうも", PHP_EOL;
//				break;
//}

// exit
// プログラムの実行を終了するときに用います。記述された時点で、プログラムの実行は直ちに終了する。
echo "start", PHP_EOL;
exit;
echo "end", PHP_EOL; //これは出力されない

if ($is_error) {
		goto error;
}

error:
	echo "エラーが発生しました。", PHP_EOL;
	exit(1);