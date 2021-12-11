<?php
declare(strict_types=1);

// null の配列だけ削除したい
$flowers = array(
  "Rose",
  "Lili",
  "Jasmine",
  0,
  "Hibiscus",
  "",
  "Tulip",
  null,
  "Sun Flower",
  "Daffodil",
  "Daisy");

$flowers = array_diff($flowers, array("", 0, null));

var_dump($flowers);