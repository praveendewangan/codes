<?php
    $readin = file('name.txt');
    $readin_count = count($readin);
    $count = 1;
    foreach($readin as $name){
        echo $name;
        if($count < $readin_count){
            echo ",";
        }
        $count++;
    }
?>