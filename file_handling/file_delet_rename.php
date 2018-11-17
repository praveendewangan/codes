<?php
    //$filename = "file_delet.txt";
// for deleting a file
    // if(unlink($filename)){
    //     echo 'File <strong>'.$filename.'</strong> has been deleted';
    // }else{
    //     echo "file can not be deleted";
    // }

    // for renaming a file
    $filename = 'file_rename.txt';
    $rand = rand(10000,99999);
    if(rename($filename, $rand.'.txt')){
        echo 'File <strong>'.$filename.'</strong> has renamed to <strong>'.$rand.'.txt</strong>';
    }else{
        echo "Error while renaming";
    }
?>