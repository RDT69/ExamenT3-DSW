<?php 
namespace Daw2\ExamenT3Dsw\shop;

use Daw2\ExamenT3Dsw\products;
use Daw2\ExamenT3Dsw\events;
use Daw2\ExamenT3Dsw\products\Product;

class OnlineShop 
{
  public function __construct()
  {
    
  }

  public function createProduct($name, $mark, $price, $weigth, $volume) {
    $product = new Product($name, $mark, $price, $weigth, $volume);
  }
}