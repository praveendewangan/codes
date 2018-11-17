<?php
$host = "localhost";
$username = "root";
$pass = "";
$db = 'user_login';

class serverException extends Exception{}
class databaseException extends Exception{}
try {
    if(!($con = @mysqli_connect($host,$username,$pass))){
        throw new serverException ("Could not connect to server.");
    }else if(!@mysqli_select_db($con,$db)){
        throw new databaseException ("Could not select database.");
    }else{
        echo "Coonected";
    }
}catch (serverException $e){
    echo "Error: ".$e->getMessage();
}catch (databaseException $e){
    echo "Error: ".$e->getMessage();
}
?>