<?php
declare(strict_types=1);

$arr = [
  [
  "id" => 1,
  "scene_name" => "シーン1",
  ],
  [
    "id" => 2,
    "scene_name" => "シーン2",
  ],
  [
    "id" => 3,
    "scene_name" => "シーン3",
  ],
];

$arr2 = [];
foreach ($arr as $key => $value) {
  $arr2[$key] = $value;
}

var_dump($arr2);