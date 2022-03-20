<?php
declare(strict_types=1);

class Foo {
    // インスタンス変数
    public $instance_variable;
    
    // クラス変数
    public static $class_variable;
    
    public function showClassVariable() {
        var_dump(self::$class_variable);
        // クラス変数へのアクセスの仕方 $ マークつけるか付けないか
    }
}

$foo1 = new Foo();
$foo2 = new Foo();

$foo1->instance_variable = "aaa";
$foo2->instance_variable = "bbb";

var_dump($foo1->instance_variable);
var_dump($foo2->instance_variable);

Foo::$class_variable = "ccc";

$foo1->showClassVariable();
$foo2->showClassVariable();
// クラス変数は、クラス全体で共通