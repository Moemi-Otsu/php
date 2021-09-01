<?php

$a = 2;

function recursion($a)
{
  if ($a < 20) {
    echo "$a\n";
    recursion($a + 1);
  }
}