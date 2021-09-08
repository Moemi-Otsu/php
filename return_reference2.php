<?php
declare(strict_types=1);

function small_numbers()
{
  return [0, 1, 2];
}

[$zero, $one, $two] = small_numbers();

echo $zero;