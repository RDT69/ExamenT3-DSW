<?php
namespace Daw2\ExamenT3Dsw\products;

 class Product {
  public $name;

  public $mark;

  public $price;

  public $weight;
  
  public $volume;

  public function __construct($name, $mark, $price, $weigth, $volume)
  {
    $this->name = $name;

    $this->mark = $mark;

    $this->price = $price;

    $this->weight = $weigth;

    $this->volume = $volume;
  }
}

  function tax($price, $typeOfTax) 
  {
    return ($price * $typeOfTax)/100;
  }
