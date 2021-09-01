<?php

$makefoo = true;

/*
 * ここでは関数foo()はまだ定義されていないので
 * コールすることはできません。
 * しかし関数bar()はコールできます。
 */

bar();

if ($makefoo) {
  function foo()
  {
    echo "I don't exist until program execution reaches me.\n";
  }
}

/*
 * ここでは $makefooがtrueと評価されているため
 * 安全にfoo()をコールすることができます。
 */

if ($makefoo) foo();

function bar()
{
  echo "I exist immediately upon program start.\n";
}