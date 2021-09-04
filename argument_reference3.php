<?php

function makecofee($type = "cappuccino")
{
  return "Making a cup of $type.\n";
}

echo makecofee();
echo makecofee(null);
echo makecofee("espresso");