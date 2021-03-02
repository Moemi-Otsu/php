<?php
$flag1 = true;
$flag2 = false;

echo $flag1 ? 1 : $flag2 ? 2 : 0;

// 実際の展開の様子
echo(($flag1 ? 1 : $flag2) ? 2 : 0);
