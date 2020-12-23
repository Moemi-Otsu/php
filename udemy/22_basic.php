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

// 引数のinputと、変数の名前は違ってOK
// inputと、処理の中で使っている変数は同じ必要がある
function getComment($string) {
		echo $string;
}

getComment($comment);

// インプット引数なし
// アウトプット戻り値あり

function getNumberOfComment() {
		return 5;
}

// 変数の中に関数を入れることもできる
$commentNumber = getNumberOfComment();

// 下記は両方5を表示
echo getNumberOfComment();
echo $commentNumber;


// インプット引数２つ
// アウトプット戻り値あり

function sumPrice($int1, $int2) {
		$int3 = $int1 + $int2;
		return $int3;
}

$total = sumPrice(3, 5);
echo $total;