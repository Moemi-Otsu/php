<?php
class ParentClass
{
    public function test()
    {
        self::who(); // output 'parent'
    $this->who(); // output 'child'
    }
  
    public function who()
    {
        echo 'parent', PHP_EOL;
    }
}

class ChildClass extends ParentClass
{
    public function who()
    {
        echo 'child';
    }
}

$obj = new ChildClass();
$obj->test();
