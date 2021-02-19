<?php

// 返り値を返さない関数の定義

function no_return_func()
{
}

$null_value = no_return_func(); // nullが代入される

if ($null_value === null) {
    echo 'nullです', PHP_EOL;
}

$var = 1;
var_dump(isset($var)); // true. 変数$varは定義されている
$var = null;
var_dump(isset($var)); //false. 変数$varはnullのため、セットされていないとされる
var_dump($var); // null. 変数$varはnull
unset($var);
var_dump(isset($var)); // false. 変数$varはunset()されている。
var_dump($var); // unsetされたためNoticeが発生。値としてはnull
