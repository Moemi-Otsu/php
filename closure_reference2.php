<?php
declare(strict_types=1);

$greet = function($name)
{
  printf("Hello %s\r\n", $name);
};

$greet('World');
$greet('PHP');