<?php
define('BOOK', 'Perfect PHP');
$value = 'BOOK';
echo constant($value), PHP_EOL;

// 定数の確認 get_defined_constants
var_dump(get_defined_constants());