<?php

function some_func() {
		$val = // データを取得するなどのロジックが含まれる
									// 取得に失敗した場合はfalseに相当するものが返るとする
		return $val;
}

$result = some_func() ? some_func() : 'default'; // ここ！！！