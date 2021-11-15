<?php
declare(strict_types=1);

class Foo {
  // インスタンス変数
  public $instance_variable;
  
  // クラス変数
  public static $class_variable;
  
  public function showClassVariable() {
    var_dump(self::$class_variable);
    // クラス変数へのアクセスの仕方 $マークつける
  }
}

$foo1 = new Foo();
$foo2 = new Foo();

$foo1->instance_variable = 'あああ';
$foo2->instance_variable = 'いいい';

var_dump($foo1->instance_variable);
var_dump($foo2->instance_variable);

// インスタンス変数は、インスタンスごとに別の値を保持することができる
// クラス変数は、クラス全体で共通。

// クラス変数は、クラス変数で共通。
Foo::$class_variable = "ううう";

$foo1->showClassVariable();
$foo2->showClassVariable();
