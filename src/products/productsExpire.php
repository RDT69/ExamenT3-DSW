<?php

namespace Daw2\ExamenT3Dsw\products;

class ProductsExpire extends Product
{
  public $name;

  public $mark;

  public $price;

  public $weight;

  public $volume;

  public $limitDay;

  function __construct($name, $mark, $price, $weigth, $volume, $limitDay)
  {
    Product::__construct($name, $mark, $price, $weigth, $volume);
    $this->limitDay = $limitDay;
  }

  function expire($today, $limitDay)
  {
    if ($today > $limitDay) {
      return "The product is expire.";
    } else {
      return "It hasn't expired yet.";
    }
  }

  function expireDays($today, $limitDay)
  {
    $contador = date_diff($today, $limitDay);
    $differenceFormat = '%a';
    $contador->format($differenceFormat);
    return "quedan {$contador} dias";
  }

  function ofert($today, $limitDay)
  {
    $contador = date_diff($today, $limitDay);
    $differenceFormat = '%a';
    $contador->format($differenceFormat);
    if ($contador < 30) return ($this->price - (($this->price*10)/100));
    if ($contador < 10) return ($this->price - (($this->price*25)/100));
  }
}
