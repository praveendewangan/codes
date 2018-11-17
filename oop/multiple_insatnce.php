<?php

class bank_account{
    public $balance = 0;

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

    public function deposit($amount){
        $this->balance = $this->balance + $amount;
    }
}
// new instance of class
$praveen = new bank_account;

// depositing some money
$praveen->deposit(1000);

// withdraw some amount
$praveen->withdraw(200);

// displaying the balance
echo "<br>".$praveen->display_balance();
?>