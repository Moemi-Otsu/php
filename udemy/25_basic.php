<?php

// 指定文字列で分解（explode）

$str_2 = '指定文字列で、分割します';

var_dump(explode('、', $str_2));

// implode

// 正規表現（preg_match）
// 文字列かどうか
// 数字かどうか
// 郵便番号とか
// メールアドレスか

$str_3 = '特定の文字列が含まれるか確認する';
echo preg_match('/文字列/',$str_3);



// 指定文字列から文字列を取得する（substr）

echo substr('abcde', 1);
// マルチバイト
echo mb_substr('かきくけこ', 2);