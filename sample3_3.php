<?php

interface FooInterface
{}

class Foo extends ParentFoo implements FooInterface
{}

class Bar
{}

$a = new Foo();

var_dump($a instanceof Foo);        // true
var_dump($a instanceof ParentFoo);  // true
var_dump($a instanceof FooInterface); // true
var_dump($a instanceof Bar); // false

// 三項演算子
$param = isset($argv[1]) ? $argv[1] : 'default';

// 上記の式をif文で書いた場合
if (isset($argv[1])) {
		$param = $argv[1];
} else {
		$param = 'default';
}

// 三項演算子の省略記法
// 条件式 ?: 式1
// この表記は、条件式が真の場合には条件式の評価値を、偽の場合は式1の評価値を返す。

// 演算子の優先順位
$b = $a;