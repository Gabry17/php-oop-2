<?php 
class User {
    public $name;
    public $surname;
    public $email;
    public $registration = true;
    public $cash = true;
    public $cart = [];

    function __construct($_name, $_surname, $email){
        $this->name = $_name;
        $this->surname = $_surname;
        $this->email = $_email;
    }

    //aggiungere prodotti al carrello
    public function addCart($product){
        $this->cart[] = $product;
    } 

    //totale prezzo carrello
    public function totalPrice(){
        $tot = 0;
        $discount = 0;
        foreach($this->cart as $item){
            if (!$this->registration) {
                $tot += $item->price * $item->quantity;
            } else {
                $totPrice += $item->price * $item->quantity;
                $discount = $totPrice * 20 / 100;
                $tot = $totPrice - $discount;

            }
        }

        return $tot;
    }
}
?>