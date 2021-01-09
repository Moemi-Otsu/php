<?php

// インターフェース

interface ProductInterface {
		public function getProduct();
}

// インターフェース

interface NewsInterface {
		public function getNews();
}

// 具象クラス、親クラス

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

// 子クラス・派生クラス・サブクラス

class Product implements ProductInterface, NewsInterface {
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
		
		public function getProduct() {
				echo $this->product;
		}
		
		public function getNews()
		{
				echo 'ニュースです。';
		}
		
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

$instance->getProduct();
echo '<br>';

//$instance->echoProduct();
//echo '<br>';

$instance->addProduct('追加分');
echo '<br>';

$instance->getProduct();
echo '<br>';

$instance->getNews();

Product::getStaticProduct('静的');
echo '<br>';