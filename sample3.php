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