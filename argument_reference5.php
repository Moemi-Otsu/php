<?php
declare(strict_types=1);

// デフォルト値を有する引数は、デフォルト値がない引数の右側に書く必要がある。
//function makeyogurt($type = "acidophilus", $flavour)
//{
//  echo "Making a bowl of $type $flavour.\n";
//}
//
//makeyogurt("raspberry");

// デフォルト値のある値は右側に書く（こちらは動作する）
function makeyogurt($flavour, $type = "acidophilus")
{
  echo "Making a bowl of $type $flavour.\n";
}

makeyogurt("raspberry");