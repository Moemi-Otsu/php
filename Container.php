<?php

declare(strict_types=1);

class Container
{
    /** @var array<string, string> */
    private $definitions = [];

    // 連想配列にキーとクラスの完全修飾子をセットするメソッド
    public function define(string $id, string $className): void
    {
        $this->definitions[$id] = $className;
    }

    // DIコンテナ
    // 連想配列にidがセットされていたら、対象のキーのオブジェクトをnewする
    // DIとは、オブジェクトの注入
    public function get(string $id)
    {
        // 定義されている ID であればそれに紐づいたクラス名を、そうでない場合は $id 自体をクラス名として扱う
        $className = $this->definitions[$id] ?? $id;

        // そのクラス名を元に ReflectionClass クラスのインスタンスを生成
        $ref = ReflectionClass($className);

        // Constructor の取得
        $constructor = $ref->getConstructor();;

        // Constructor が存在しない場合は、引数なしでインスタンス化
        if ($constructor === null) {
            return new $className;
        }

        $args = [];
        // getParameters() コンストラクタの引数の情報を全て取得
        foreach ($constructor->getParameters() as $parameter) {
            // 引数の型情報を取得
            $type = $parameter->getType();
            $args[] = $this->get($type->getName());
        }

        return new $className(...$args);
    }
}

class Bar {}

class Foo {
    public $bar;

    public function __construct(Bar $bar)
    {
        $this->bar = $bar;
    }
}

$container = new Container();

$container->define('foo', Foo::class);

var_dump($container->get('foo'));
