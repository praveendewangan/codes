<?php

class database_connect{
    public function __construct($host,$username,$pass){
        echo "Attempting connection...<br>";
        if(!@$this->connect($host,$username,$pass)){
            echo "Connection failed!";
        }else if($this->connect($host,$username,$pass)){
            echo "Connected to $host";
        }
    }

    public function connect($host,$username,$pass){
        if(!mysqli_connect($host,$username,$pass)){
            return false;
        }else{
            return true;
        }
    }
}

$pvn = new database_connect('localhost','root','');
?>