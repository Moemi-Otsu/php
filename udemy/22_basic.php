<?php

// インプット引数 なし
// アウトプット戻り値 なし

function test() {
		// 処理
		echo 'テスト';
}

test();


// インプット引数 あり
// アウトプット戻り値 なし

$comment = 'コメント2';

function getComment($string) {
		echo $string;
}

getComment($comment);