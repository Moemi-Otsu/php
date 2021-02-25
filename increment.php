<?php
$a = 10;

echo $a++, PHP_EOL; // 10を返し、1を加える
echo $a, PHP_EOL; // 11になっている

echo ++$a, PHP_EOL; // 1を加え、12を返す
echo $a, PHP_EOL; // 12になっている

echo $a--, PHP_EOL; // 12を返し、1を引く
echo $a, PHP_EOL; // 11になっている

echo --$a, PHP_EOL; // 1を引き、10を返す
echo $a, PHP_EOL; // 10になっている
