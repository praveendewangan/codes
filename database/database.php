<?php
    $error = "Could not connect!";
    $host = "localhost";
    $user = "root";
    $password = "";
    $database = 'practice';
    // @mysqli_connect($host,$user,$password) or die($error);
    // mysqli_select_db($database) || die($error);
    // echo "Connected!";
    $con = @mysqli_connect($host,$user,$password);
    if(!$con || !@mysqli_select_db($con,$database)){
        echo $error;
    }else{
        //echo "ok";
    }
    // procedural way
    // $conn = @mysqli_connect($host,$user,$password);
    // if(!$conn){
    //     die("Connection error : ".mysqli_connect_error());
    // }else{
    //     echo "connected!";
    // }
?>