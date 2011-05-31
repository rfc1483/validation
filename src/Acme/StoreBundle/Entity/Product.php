<?php

namespace Acme\StoreBundle\Entity;

class Product {

    public $name;
    protected $price;

    public function getPrice() {
        return $this->price;
    }

    public function setPrice($price) {
        $this->price = $price;
    }

}
