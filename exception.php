<?php

//function exceptions_error_handler($severity, $message, $filename, $lineno) {
//  throw new ErrorException($message, 0, $severity, $filename, $lineno);
//}
//
//set_error_handler('exceptions_error_handler');

//echo 1 / 0;

function inverse($x) {
  if (!$x) {
    throw new Exception('ゼロによる除算');
  }
  return 1/$x;
}

try {
  echo inverse(5) . "\n";
  echo inverse(0). "\n";
} catch (Exception $e) {
  echo '補足した例外: ', $e->getMessage(), "\n";
}

echo "Hello World\n";