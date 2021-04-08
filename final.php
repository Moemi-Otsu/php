<?php
class Employee
{
    public $salary = 20;
  
    final public function getSalary() // 給料を取得するメソッド
    {
        return $this->salary;
    }
}

class Programmer extends Employee
{
    // メソッドをオーバーライドしてプログラマの給料は2倍にする。
    // しかし、Fatal error: Cannnot override final method ...がでる
  
    public function getSalary()
    {
        return $this->salary * 2;
    }
}
