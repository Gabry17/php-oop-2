<?php
class Product {
    public $price;
    public $weight;
    public $quantity;

    function __construct($_price, $_weight, $_quantity){
        $this->price = $_price;
        $this->weight = $_weight;
        $this->quantity = $_quantity;
    }
}
?>