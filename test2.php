<?php

class Foo {
  public $instance_variable;
  
  public static $class_variable;
  
  public function showClassVariable()
  {
    var_dump(self::$class_variable);
  }
}

$foo1 = new Foo();
$foo2 = new Foo();

$foo1->instance_variable = "あああ\n";
$foo2->instance_variable = "いいい\n";

echo $foo1->instance_variable;
echo $foo2->instance_variable;

Foo::$class_variable = "ううう";
Foo::$class_variable = "えええ";

$foo1->showClassVariable();
$foo2->showClassVariable();