<?php
declare(strict_types=1);

class class_references
{
  // プロパティの宣言
  public $var = 'a default value';
  
  // メソッドの宣言
  public function displayVar() {
    echo $this->var;
  }
}

$a = new class_references();
$a->displayVar();

$classname = 'class_references';
// 文字列を使って インスタンスを new することもできる
$instance = new $classname();
var_dump($instance);