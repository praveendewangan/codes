<?php

class bank_account{
    public $balance = 0;
    public $type = '18-25';

    public function set_type($input){
        $this->type = $input;
    }

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


class savings_account extends bank_account{
    // public type = '18-25';
}

$alex = new bank_account;
$alex->set_type('18-25 current');
$alex->deposit(200);

$alex_saving = new savings_account;
$alex_saving->set_type('super saver');
$alex_saving->deposit(700);

echo $alex->type.' has '.$alex->display_balance().'<br>';
echo $alex_saving->type.' has '.$alex_saving->display_balance();

// echo $alex->display_balance().'<br>';
// echo $alex_saving->display_balance();

// new instance of class
// $praveen = new bank_account;

// // depositing some money
// $praveen->deposit(1000);

// // withdraw some amount
// $praveen->withdraw(200);

// // displaying the balance
// echo "<br>".$praveen->display_balance();
?>