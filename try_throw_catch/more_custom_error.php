<?php
$host = "localhost";
$username = "root";
$pass = "";
$db = 'user_login';

class serverException extends Exception{
    public function shoSpecific(){
        return "Error thrown on line ".$this->getLine().' in '.$this->getFile();
    }
}
class databaseException extends Exception{
    public function shoSpecific(){
        return "Error thrown on line ".$this->getLine().' in '.$this->getFile();
    }
}
try {
    if(!($con = @mysqli_connect($host,$username,$pass))){
        throw new serverException ();
    }else if(!@mysqli_select_db($con,$db)){
        throw new databaseException ();
    }else{
        echo "Coonected";
    }
}catch (serverException $e){
    echo $e->shoSpecific();
}catch (databaseException $e){
    echo $e->shoSpecific();
}
?>