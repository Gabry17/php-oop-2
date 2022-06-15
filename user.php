<?php 
class User {
    public $name;
    public $surname;
    public $email;
    //public $registration = true;
    public $cash = false;
    public $cart = [];

    //aggiungere prodotti al carrello
    public function addCart($product){
        if($product->available){
            $this->cart[] = $product;
        }
    } 

    //registration
    public function registration(){
        if($this->name && $this->surname && $this->email){
            return true;
        } 
        return false;
    }

    public function addRegistration($_name, $_surname, $_email){
        $this->name = $_name;
        $this->surname = $_surname;
        $this->email = $_email;
    }

    //totale prezzo carrello
    public function totalPrice(){
        $tot = 0;
        $discount = 0;
        foreach($this->cart as $item){
            if ($this->registration()) {
                $totPrice += $item->price * $item->quantity;
                $discount = $totPrice * 20 / 100;
                $tot = $totPrice - $discount;
            } else {
                $tot += $item->price * $item->quantity;

            }
        }

        return $tot;
    }

    //aggiungo sconto 
    // public function discount(){
    //     $discount = 0;
    //     if($this->registration){
    //         $discount = 20;
    //     } else {
    //         $discount = "nessuno";
    //     }

    //     return $discount;
    // }

    //Pagamento
    public function pay(){
        $payment = "";
        if($this->cash){
            $payment = "Il tuo ordine è andato a buon fine";
        } else {
            $payment = "Pagamento annullato";
        }

        return $payment;
    }
}
?>