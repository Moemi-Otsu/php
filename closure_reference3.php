<?php
declare(strict_types=1);

function method() {
  $hello = 'hello';
  $closure = function () use ($hello) {
    echo "${$hello} world!", PHP_EOL;
  };
  $closure();
}
method();