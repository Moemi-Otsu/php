<?php

class Foo {
  // インスタンス変数
  public $instance_variable;
  
  // クラス変数
  public static $class_variable;
  
  public function showClassVariable() {
    var_dump(self::$class_variable);
  }
}

$foo1 = new Foo();
$foo2 = new Foo();

$foo1->instance_variable = "あああ";
$foo2->instance_variable = "いいい";

var_dump($foo1->instance_variable);
var_dump($foo2->instance_variable);

// クラス変数
Foo::$class_variable = "ううう";

$foo1->showClassVariable();
$foo2->showClassVariable();