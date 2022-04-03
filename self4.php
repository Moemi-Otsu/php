<?php
declare(strict_types=1);

class Fruits {
    const FRUITS = 'apple '; // クラス定数
    public static $fruits = 'grape '; // クラス変数
    
    function test() {
        echo self::FRUITS;
        echo self::$fruits;
    }
}

//$obj = new Fruits();
//$obj->test();
// self::は自クラスを表す。
// 静的なプロパティにアクセスする場合は self::を使う

class ParentClass {
    function test() {
        self::who(); // output 'parent' whoメソッドを呼ぶ
        $this->who(); // output 'child' 自身のオブジェクトを指す
        // $thisは動的なインスタンスにアクセスする際に使う
    }
    
    function who() {
        echo 'parent ';
    }
}

class ChildClass extends ParentClass {
    function who() {
        echo 'child ';
    }
}

//$obj2 = new ParentClass();
//$obj2->test();

$obj3 = new ChildClass();
$obj3->test();