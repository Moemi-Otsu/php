<?php

// 返り値を返さない関数の定義

function no_return_func()
{
}

$null_value = no_return_func(); // nullが代入される

if ($null_value === null) {
    echo 'nullです';
}
