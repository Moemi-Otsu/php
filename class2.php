<?php

class Employee
{
    public $name;
    public $state = '働いている';
  
    public function work()
    {
        echo '書類を整理しています', PHP_EOL;
    }
}

$yamada = new Employee();

$yamada->name = '山田';

// echo
echo $yamada->state, $yamada->name, 'さん';

$yamada->work();
