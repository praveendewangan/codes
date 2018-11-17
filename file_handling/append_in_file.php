<?php
    $handle = fopen('name.txt','w');
    fwrite($handle,'pvn'."\n");
    fclose($handle);
?>