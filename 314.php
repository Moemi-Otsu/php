<?php
$string1 = 'this is string';
$string2 = "this is string";
$string3 = 'hi, $string2 \n';
$string4 = "hi, $string2 \n"; // ダブルクオートの場合は展開される

echo $string1;
echo $string2;
echo $string3;
echo $string4;
