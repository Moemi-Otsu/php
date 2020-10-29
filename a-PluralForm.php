<?php
//fscanf(STDIN, "%s", $s);

$s = "box";

// 文字列を配列にする
$arr = str_split($s);

// 配列の最後の文字を取得する
$end = end($arr);

if ($end !== "s") {
		echo $s . "s";
} else {
		echo $s . "es";
}