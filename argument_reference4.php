<?php

function makecoffee($types = array("cappuccino", "cafemoca"), $coffeeMaker = NULL)
{
  $device = is_null($coffeeMaker) ? "hands" : $coffeeMaker;
  
  return "Making a cup of ".join(", ", $types)." with $device.\n";
}

//echo makecoffee();
echo makecoffee(array("cappuccino", "lavazza"), "teapot");