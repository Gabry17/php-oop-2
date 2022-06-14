<?php
class Product {
    public $type;
    public $price;
    public $weight;
    public $quantity;

    function __construct($_type, $_price, $_weight, $_quantity){
        $this->type = $_type;
        $this->price = $_price;
        $this->weight = $_weight;
        $this->quantity = $_quantity;
    }
}

?>