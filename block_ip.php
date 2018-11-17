<?php
$ip_address = $_SERVER['REMOTE_ADDR'];
// echo $ip_address;
$ip = array('::1','127.0.0.1','127.0.0.2');

foreach($ip as $user_ip){
    if($user_ip == $ip_address){
        die('your ip address'.$ip_address.' has been blocked');
    }
}
?>