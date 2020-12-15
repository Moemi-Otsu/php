<?php

class Product{
		// アクセス修飾子
		
		// 変数
		private $product = [];
		
		// 関数
		
		// $this->product はこのclassの$productのこと
		
		// constractは、classを呼び出した初回に起動する
		function __construct($product){
				$this->product = $product;
		}
		
		public function getProduct(){
				echo $this->product;
		}
		
		// $this->productに、引数の$itemを := で追加
		public function addProduct($item){
				$this->product .= $item;
		}
		
		// publicの中にstaticを付けることで
		// 静的に（インスタンスを作らずに）関数を使うことができる
		public static function getStaticProduct($str){
				echo $str;
		}
}

$instance = new Product('テスト');

// classをinstance化すると、objectになる
var_dump($instance);

$instance->getProduct();
echo '<br>';

$instance->addProduct('追加分');
echo '<br>';

$instance->getProduct();
echo '<br>';

Product::getStaticProduct('静的');
echo '<br>';