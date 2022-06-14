<?php 
class User {
    public $name;
    public $surname;
    public $email;
    public $registration = false;
    public $cash = true;
    public $cart = [];

    function __construct($_name, $_surname, $email){
        $this->name = $_name;
        $this->surname = $_surname;
        $this->email = $_email;
    }

    public function addCart($product){
        $this->cart[] = $product;
    } 

    public function totalPrice(){
        $tot = 0;
        foreach($this->cart as $item){
            $tot += $item->price * $item->quantity;
        }

        return $tot;
    }
}
?>