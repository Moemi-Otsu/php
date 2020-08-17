<?php
/*
 * サンプルのPHPスクリプトです。
 */

$number = rand();
if ($number % 2 == 0) {
		echo $number, "は偶数です。", PHP_EOL;
}
else {
		echo $number, "は奇数です。", PHP_EOL;
}
?>

<?php
$a = 1;
$b = "foo bar";
$c = array(1, 2, 3);

var_dump($a);
var_dump($b);
var_dump($c);

/*
 * 2.2 変数
 */

$var = 1;
var_dump(isset($var));
var_dump(isset($var1));

/*
 * 2.2.2 可変変数
 */
$var = 1;
$var_name = 'var';
echo $$var_name, PHP_EOL;

/*
 * 2.2.3 変数のスコープ
 */

// グローバルスコープ
$array = array(1,2,3,4,5,);
foreach ($array as $i) {
		echo $i, PHP_EOL;
}
echo "Last:", $i, PHP_EOL;

// ローカルスコープ
$foo = 1;
function same_function() {
		$foo = 10;
		$bar = 20;
}
//some_function();
//echo $foo, PHP_EOL;
//echo $bar, PHP_EOL;

//var_dump($_SERVER);