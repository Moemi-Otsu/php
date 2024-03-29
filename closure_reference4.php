<?php
declare(strict_types=1);

class Cart
{
  const PRICE_BUTTER = 1.00;
  const PRICE_MILK = 3.00;
  const PRICE_EGGS = 6.95;
  
  protected $products = array();
  
  public function add($product, $quantity)
  {
    $this->products[$product] = $quantity;
  }
  
  public function getQuantity($product)
  {
    return isset($this->products[$product]) ? $this->products[$product] :
      FALSE;
  }
  
  public function getTotal($tax)
  {
    $total = 0.00;
    
    $callback =
      function ($quantity, $product) use ($tax, &$total)
      {
        $pricePerItem = constant(__CLASS__ . "::PRICE_" .
          strtoupper($product));
  
//        var_dump($product);
//        var_dump($pricePerItem);
        var_dump($total += ($pricePerItem * $quantity) * ($tax + 1.0));
      };
    
    array_walk($this->products, $callback);
    return round($total, 2);
  }
}

$my_cart = new Cart;

//var_dump($my_cart);

$my_cart->add('butter', 1);
//var_dump($my_cart);
$my_cart->add('milk', 3);
//var_dump($my_cart);
$my_cart->add('eggs', 6);
//var_dump($my_cart);

$a = $my_cart->getTotal(0.05) . "\n";
var_dump($a);