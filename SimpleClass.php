<?php
declare(strict_types=1);

class SimpleClass
{
  public $var = "a default value";
  
  public function displayVar()
  {
    echo $this->var;
  }
}

$instance = new SimpleClass();

$assigned = $instance;
$reference =& $instance;

//echo $instance->var = '$assigned will have this value';
echo $instance->var;