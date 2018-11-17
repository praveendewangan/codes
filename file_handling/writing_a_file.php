<?php
    $handle = fopen('name.txt','w');

    fwrite($handle, 'Praveen'."\n");
    fwrite($handle, 'Dewangan');

    fclose($handle);
    echo "done..";
?>