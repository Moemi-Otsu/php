<?php

class SomeClass
{
}

$a = new SomeClass();

if ($a instanceof SomeClass) {
		echo '$aは SomeClass のインスタンスです。', PHP_EOL;
}