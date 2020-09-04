<?php

class SomeClass
{
}
$a = new SomeClass();

if ($a instanceof SomeClass) {
		echo '$a は SomeClass のインスタンスです', PHP_EOL;
}

$var = 1;
var_dump(isset($var));
$var = null;
var_dump(isset($var));
var_dump($var);
unset($var);
var_dump(isset($var));
var_dump($var);

echo (float)'15foo', PHP_EOL;
echo (float)'15.33foo', PHP_EOL;
// eは10のべき乗を表す
echo (float)'1e2foo', PHP_EOL;
echo (float)'foo', PHP_EOL;

if ('0.0' == '0') {
		echo ' "0.0"と"0"は等しいです', PHP_EOL;
}

$a = 10;
echo $a, PHP_EOL;
echo $a = 11, PHP_EOL;

$age = 15;
$tom = 'Tom is ' . $age . ' years old.';
echo $tom, PHP_EOL;

// 整数を直接文字列として連結したいときは、スペースを開ける必要がある。
// Bobは浮動小数てんと文字列が演算子なしに連続して記述されていると見なされている。
$tom = 'Tom is ' . 15 . ' years old.';

$a = 10;
$a += 1;
echo $a, PHP_EOL;

$tom = 'Tom is ' . 15 . ' years old.';

$a = 10;
echo $a++, PHP_EOL;
echo $a, PHP_EOL;

echo ++$a, PHP_EOL;
echo $a, PHP_EOL;
echo $a--, PHP_EOL;
echo $a, PHP_EOL;
echo --$a, PHP_EOL;
echo $a, PHP_EOL;

// 論理演算子では、評価結果がわかった時点で演算結果を返します。
// これを短絡評価と呼ぶ。最初のissetが偽である場合、次の$argvの評価も一切行われない。
if (isset($argv[1]) && $argv[1]) {
		echo '与えられた引数は真です。', PHP_EOL;
}
else {
		echo '引数が与えられていないか、与えられた引数が真ではありません', PHP_EOL;
}