<?php
class Product {
    public $type;
    public $price;
    public $weight;
    public $quantity;

    function __construct($_type, $_price, $_weight){
        $this->type = $_type;
        $this->price = $_price;
        $this->weight = $_weight;
    }

    public function productInfo() {
        return "Tipo: $this->type Peso: $this->weight gr Prezzo: $this->price €";
    }
}

?>