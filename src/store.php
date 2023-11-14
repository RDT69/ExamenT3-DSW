<?php

namespace Daw2\ExamenT3Dsw;

class Store {
    private $elements = array();

    public function addElement($newElement) {
        array_push($this->elements, $newElement);
        
    }

    public function showElements() {
        foreach ($this->elements as $element) {
            print_r($element);
            echo "Precio de venta: " . $element->getPrice() . "<br>";
        }
    }

    public function showProducts() {
        foreach ($this->elements as $element) {
            if($element instanceof Product){
                print_r($element);
                echo "Precio de venta: " . $element->getPrice() . "<br>";
            }
        }
    }

    public function showServices() {
        foreach ($this->elements as $element) {
            if($element instanceof Service){
                print_r($element);
                echo "Precio de venta: " . $element->getPrice() . "<br>";
            }
        }
    }

    public function showExpiredProducts() {
        foreach ($this->elements as $element) {
            if($element instanceof expiredProduct){
                print_r($element);
                echo "Precio de venta: " . $element->getPrice() . "<br>";
            }
        }
    }

    public function showNoExpiredProducts() {
        foreach ($this->elements as $element) {
            if($element instanceof expiredProduct){
                if($element->isExpired()){
                    print_r($element);
                    echo "Precio de venta: " . $element->getPrice() . "<br>";
                }
            }
        }
    }

} 