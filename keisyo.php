<?php
class Employee
{
    public function work()
    {
        echo '書類を整理しています', PHP_EOL;
    }
}

class Programmer extends Employee
{
    public function work($how = 'コンピュータで')
    {
        echo $how, 'プログラムを書いています', PHP_EOL;
    }
}

$toshi = new Programmer();

$toshi->work();
