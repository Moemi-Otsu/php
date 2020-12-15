<?php

$quantity = 2;
$unitPrice = 500;

$basePrice = $quantity * $unitPrice;

$shippingCost = shippingCost($basePrice); //送料計算メソッド
$itemPrice = ($basePrice + $shippingCost);

function shippingCost($basePrice) {
		if( basePrice < 3000 ) return 500;
		return 0;
}