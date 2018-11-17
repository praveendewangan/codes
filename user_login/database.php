<?php
    $error = "Could not connect!";
    $host = "localhost";
    $user = "root";
    $password = "";
    $database = 'user_login';
    // @mysqli_connect($host,$user,$password) or die($error);
    // mysqli_select_db($database) || die($error);
    // echo "Connected!";
    $con = @mysqli_connect($host,$user,$password);
    // var_dump($con);
    if(!$con || !@mysqli_select_db($con,$database)){
        echo $error;
    }else{
        //echo "ok";
    }
?>