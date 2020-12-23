<?php

// 文字列の長さ

// 日本語はマルチバイト
// 日本語はSJIS, UTF-8
// 日本語は3から６バイオt
$text = 'あいうえお';

echo strlen($text);

// mb_strlen なら日本
echo mb_strlen($text);


// 文字列の置換

$str = '文字列を置換します';

echo str_replace('置換', 'ちかん', $str);