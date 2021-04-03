<?php
class Fruits
{
    const FRUITS = 'apple';
    public static $fruits = 'grape';

    public function test()
    {
        echo self::FRUITS;
        echo self::$fruits;
//    echo self::output_fruits_name();
    }
}

$obj = new Fruits();
$obj->test();
