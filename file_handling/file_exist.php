<?php
    $file_o = 'file_exist.txt';

    if(file_exists($file_o)){
        echo "File already exist";
    }
    else{
        $handle = fopen($file_o,'w');
        fwrite($handle,"nothing");
        fclose($handle);
    }
?>