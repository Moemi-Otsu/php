<?php

$globalVariable = 'グローバル変数です';

function checkScope($str) {
  $localVariable = 'ローカル変数です';

  return $str;
}

echo $globalVariable;
echo $localVariable;

checkScope($globalVariable);
