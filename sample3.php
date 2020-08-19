<?php

$string1 = 'this is string';
$string2 = "this is string";
$string3 = 'hi, $string2 \n';
$string4 = "hi, $string2 \n";

echo $string3, PHP_EOL;
echo $string4;

$age = 15;
echo "$ageyears old.", PHP_EOL;
echo "{$age}years old", PHP_EOL;

$foo = <<<EOI
ヒアドキュメントでは、このように、
複数行にわたる文章をそのまま表記することができます。

Tomの年齢は"$age"歳です。
EOI;

echo $foo;

if (!isset($argv[1])) {
		exit;
}

$num = $argv[1];
if ($num == 100) {
		echo "num is 100", PHP_EOL;
} else {
		echo "num is not 100", PHP_EOL;
}