<?php

// 親クラス

class BaseProduct {
		// 変数 関数
		public function echoProduct() {
				echo '親クラスです';
		}
		
		// オーバーライド（上書き）
		public function getProduct() {
				echo '親の関数です';
		}
}

// 子クラス

class Product extends BaseProduct {
		// アクセス修飾子
		// private(外からアクセスできない)
		// protected（自分・継承したクラス）
		// public（公開）
		
		// 変数
		private $product = [];
		
		// 関数
		
		function __construct($product) {
				$this->product = $product;
		}
		
//		public function getProduct() {
//				echo $this->product;
//		}
		
		// 文字列演算子の2種類のうちの1つ結合代入演算子（.=）
		// 右側の引数に左側の引数を追加する
		public function addProduct($item) {
				$this->product .= $item;
		}
		
		public static function getStaticProduct($str) {
				echo $str;
		}
}

// このインスタンス内に変数が入っている
$instance = new Product('テスト');

// クラスをインスタンス化するとobjectとして表示される
var_dump($instance);

//object(Product)#1 (1) {
//["product":"Product":private]=>
//  string(9) "テスト"
//}
//テスト<br><br>テスト追加分<br>静的<br>~


// インスタンス変数から矢印をつなぐことで関数を呼び出すことができる
$instance->getProduct();
echo '<br>';

$instance->echoProduct();
echo '<br>';

$instance->addProduct('追加分');
echo '<br>';

$instance->getProduct();
echo '<br>';

Product::getStaticProduct('静的');
echo '<br>';