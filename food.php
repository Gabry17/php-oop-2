<?php
require_once __DIR__ . "/product.php";

class Food extends Product{
    public $type;
    public $taste;

    function __construct($_price, $_weight, $_quantity, $_type, $_taste){
        parent::__construct($_price, $_weight, $_quantity);
        $this->type = $_type;
        $this->taste = $_taste;
    }
}
?>