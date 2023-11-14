<?php

namespace Daw2\ExamenT3Dsw;
use dateTime;




class expiredProduct extends Product {
    private $expireDate;

    public function __construct($name,$baseP,$caracteristics,$companyName,$weight,$volume,$expireDate) {
        parent::__construct($name,$baseP,$caracteristics,$companyName,$weight,$volume);
        $this->expireDate = DateTime::createFromFormat('Y-m-d', $expireDate);
    }

    public function isExpired() {
        $today = new DateTime();
        return ($today > $this->expireDate) ? "El producto está caducado" : "El producto no está caducado";
    }

    public function daysToExpire() {
        $today = new DateTime();
        $diff = $today->diff($this->expireDate);
        return $diff->days;
    }

    public function applyDiscount() {
        $daysToExpire = $this->daysToExpire();

        if ($daysToExpire <= 30) {
            $discount = $this->getPrice() * 0.10;
        } elseif ($daysToExpire <= 10) {
            $discount = $this->getPrice() * 0.25;
        } else {
            $discount = 0;
        }
        parent::setBasePrice($this->getPrice() - number_format($discount, 2));
    }
}