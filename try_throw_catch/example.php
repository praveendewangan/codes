<?php

$age = 15;

try {

    if($age>18){
        echo 'Old enough';
    }else{
        throw new Exception(" Not old enough!");
    }
}catch (Exception $e){
    echo "Error:".$e->getMessage();
}
?>