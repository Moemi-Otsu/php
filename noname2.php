<?php
$array = array(
  '"ダブルクオート"',
  '<tag>',
  '\'シングルクオート\'',
);

// array_map — 指定した配列の要素にコールバック関数を適用する

$escaped = array_map(function ($value) {
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}, $array);

var_dump($escaped);

//array(3) {
//  [0]=>
//  string(33) "&quot;ダブルクオート&quot;"
//  [1]=>
//  string(11) "&lt;tag&gt;"
//  [2]=>
//  string(36) "&#039;シングルクオート&#039;"
//}
