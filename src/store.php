<?php

namespace Daw2\ExamenT3Dsw;

class Store {
    private $elements = array();

    public function addElement($newElement) {
        array_push($this->elements, $newElement);
        
    }

    public function showElements() {
        $arrayElements = [];
        foreach ($this->elements as $element) {
            $arrayElements[] = $element;
            //echo "Precio de venta: " . $element->getPrice() . "<br>";
        }
        return $arrayElements;
    }

    public function showProducts() {
        $arrayProducts = [];
        foreach ($this->elements as $product) {
            if($product instanceof Product){
                $arrayProducts[] = $product;
                //echo "Precio de venta: " . $product->getPrice() . "<br>";
            }
        }
        return $arrayProducts;
    }

    public function showServices() {
        $arrayService = [];
        foreach ($this->elements as $service) {
            if($service instanceof Service){
                $arrayService [] = $service;
                //echo "Precio de venta: " . $service->getPrice() . "<br>";
            }
        }
        return $arrayService;
    }

    public function showExpiredProducts() {
        $arrayExpiredProduct = [];
        foreach ($this->elements as $expieredProduct) {
            if($expieredProduct instanceof expiredProduct){
                $arrayExpiredProduct[] = $expieredProduct;
                //echo "Precio de venta: " . $expieredProduct->getPrice() . "<br>";
            }
        }
        return $arrayExpiredProduct;
    }

    public function showNoExpiredProducts() {
        $arrayNoExpiredProduct = [];
        foreach ($this->elements as $NoExpiredProduct) { 
            if($NoExpiredProduct instanceof expiredProduct){
                if($NoExpiredProduct->isExpired()){
                    $arrayNoExpiredProduct[] = $NoExpiredProduct;
                    //echo "Precio de venta: " . $NoExpiredProduct->getPrice() . "<br>";
                }
            }
        }
        return $arrayNoExpiredProduct;
    }

} 