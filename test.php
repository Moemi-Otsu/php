<?php

class Foo {
  public $instance_variable;
  
  public static $class_variable;
  
  public function showVariable()
  {
    var_dump(self::$class_variable);
  }
}

$foo1 = new Foo();
$foo2 = new Foo();

// インスタンス変数に値をセット
$foo1->instance_variable = "あああ";
$foo2->instance_variable = "いいい";

var_dump($foo1->instance_variable);
var_dump($foo2->instance_variable);

Foo::$class_variable = "ううう";

$foo1->showVariable();
$foo2->showVariable();