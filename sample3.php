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
		echo ' "0.0"と"0"は等しいです';
}