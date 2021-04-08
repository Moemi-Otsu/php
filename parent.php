<?php
class Programmer extends Employee
{
  public function __construct($name, $type)
  {
    parent::__construct($name, $type); //親クラスのコンストラクタを呼び出し
    
    ... Programmer 特有の処理 ...
  }
}