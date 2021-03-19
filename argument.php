<?php
// 挨拶文を指定しなかった場合、Hello!が使われる関数

function hello($name, $greeting = 'Hello!')
{
    echo $greeting, $name, PHP_EOL;
}

hello('Bob', 'Good morning!');
hello('Tom');
