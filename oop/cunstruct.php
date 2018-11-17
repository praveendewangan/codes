<?php
class example{

    public function __construct($some){
        $this->say_something($some);
    }

    public function say_something($some){
        echo $some;
    }
}

$pvn = new example('Praveen');
?>