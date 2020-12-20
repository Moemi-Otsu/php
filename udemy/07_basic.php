<?php

// 変数
// 上書き
// 動的型付言語（型が勝手に決まる）
$test = 'あああああ';
var_dump($test);
$test = 'いいいい';

// 変数は上書きできる
$test = 123;

echo $test;

var_dump($test);