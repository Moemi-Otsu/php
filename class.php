<?php
class Employee
{
    public function work()
    {
        echo '書類を整理しています', PHP_EOL;
    }
}

// インスタンス化
$yamada = new Employee();

// クラスメソッドの呼び出し
$yamada->work();
