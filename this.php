<?php

class Employee
{
    public $name;
    private $state = '働いている'; // private プロパティなのでクラスの内側からしかアクセスできない
  
    public function getState() // private な プロパティをアクセスするメソッド
    {
        return $this->state;
    }
  
    public function setState($state) // private なプロパティを変更するメソッド
    {
        $this->state = $state;
    }
  
    public function work()
    {
        echo '書類を整理しています', PHP_EOL;
    }
}

$yamada = new Employee();

$yamada->name = '山田';

$yamada->setState('休養している');

echo $yamada->name, 'さんは', $yamada->getState(), PHP_EOL; // 山田さんは休養している
