<?php

class bank_account{
    public $balance = 10.5;

    public function display_balance(){
        return "Balance : ".$this->balance;
    }

    public function withdraw($amount){
        try {
            if(($this->balance)<$amount){
                throw new Exception("Not enough money");
                // echo "Not enought money";
            }else{
                $this->balance = $this->balance - $amount;
            }
        }catch (Exception $e){
            echo "Error : ".$e->getMessage();
        }
    }
}
// new instance of class
$praveen = new bank_account;

// withdraw some amount
$praveen->withdraw(15);

// displaying the balance
echo "<br>".$praveen->display_balance();
?>