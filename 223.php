<?php
// グローバルスコープ
$array = array(1, 2, 3, 4, 5,);
foreach ($array as $i) {
    echo $i, PHP_EOL;
}
echo "Last: ", $i, PHP_EOL;

// ローカルスコープ
$foo = 1;

function some_function()
{
    $foo = 10; //ここはローカルスコープ
    $bar = 20;
}

some_function();

echo $foo, PHP_EOL;
//echo $bar, PHP_EOL; // エラーになる


// globalキーワード
$foo2 = 3;
function some_function2()
{
    global $foo2;
    echo $foo2, PHP_EOL;
}

some_function2();
