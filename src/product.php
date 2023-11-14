<?php

namespace Daw2\ExamenT3Dsw;


class Product extends Element{
    private $companyName;
    private $weight;
    private $volume;

    public function __construct($name,$basePrice,$caracteristics,$companyName,$weight,$volume) {
        parent::__construct($name,$basePrice,$caracteristics);
        $this->companyName = $companyName;
        $this->weight = $weight;
        $this->volume = $volume;

    }

    public function shippingCost() {
        $fixedCost = 2;
        $weightCost = $this->weight * 0.0002;
        $volumeCost = floor($this->volume / 1000); 

        $shippingCost = $fixedCost + $weightCost + $volumeCost;

        return $shippingCost;
    }
}