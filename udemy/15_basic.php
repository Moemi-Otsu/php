<?php

// シングルクオートで囲うとstring型
$height = '90';
var_dump($height);

// 演算子 === は、型まで指定される厳密な演算子
if ($height === 90) { // 数字
		echo '身長は' . $height;
}

// == 一致
// === 型まで一致