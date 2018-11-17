<?php

    function hit_count(){
        $ip_address = $_SERVER['REMOTE_ADDR'];
        $ip_file = file('ip.txt');
        foreach($ip_file as $ip){
            $ip_single = trim($ip);
            if($ip_single == $ip_address){
                $found = true;
                break;
            }else{
                $found = false;
            }
        }
        if($found == false){
            $filename = "count.txt";
            $handle = fopen($filename,'r');
            $current = fread($handle,filesize($filename));
            fclose($handle);
            $current_inc = $current + 1;
            $handle = fopen($filename,'w');
            fwrite($handle, $current_inc);
            fclose($handle);

            $handle = fopen('ip.txt','a');
            fwrite($handle,"\n".$ip_address);
            fclose($handle);
            echo "not found";
        }else{
            echo "found";
        }
    }

    hit_count();
?>