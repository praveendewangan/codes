<?php
    $filename = 'example.xml';
    $xml = simplexml_load_file($filename);
    // echo $xml->producer[1]->name.' is '.$xml->producer[1]->age;
    foreach($xml->producer as $producer){
        echo $producer->name.' is '.$producer->age."<br>"; 
    }
?>