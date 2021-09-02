<?php
function takes_array($input)
{
  echo "$input[0] + $input[1] = ", $input[0]+$input[1];
}

$input = array(1, 2);

takes_array($input);