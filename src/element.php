<?php 

namespace  Daw2\ExamenT3Dsw;

class Element {
    private $name;
    private $baseP;
    private $caracteristics;
    private $tax = 7;

    public function __construct($name,$baseP,$caracteristics) {
        $this->name = $name;
        $this->baseP = number_format($baseP, 2);
        $this->caracteristics = $caracteristics;
    }

    public function getName() {
        return $this->name;
    }

    public function getBaseP() {
        return $this->baseP;
    }

    public function getCaracteristics() {
        return $this->caracteristics;
    }

    public function getPrice() {
        return number_format($this->baseP + (($this->tax / 100)*  $this->baseP), 2);
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setBasePrice($price) {
        $this->baseP = $price;
    }

    public function setCaracteristics($caracteristics) {
        $this->caracteristics = $caracteristics;
    }
    
    public function setTax($newTax) {
        $this->tax == $newTax;
    }

    public function __toString() {
            return "Element: {$this->name} , {$this->baseP} , {$this->caracteristics} , {$this->getPrice()}";
        }
}