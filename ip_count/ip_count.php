<?php
require "database.php";
$user_ip = $_SERVER['REMOTE_ADDR'];
// echo $user_ip;

function ip_exist($user_ip){
    // global $user_ip;
    global $con;
    $query = "SELECT ip FROM ip_address WHERE ip = '$user_ip'";
    $query_run = mysqli_query($con,$query);
    $query_num_rows = mysqli_num_rows($query_run);
    if($query_num_rows == 0){
        return false;
    }else if($query_num_rows >= 1){
        return true;
    }
}

function ip_add($ip){
    global $con;
    $query = "INSERT INTO ip_address VALUES('$ip')";
    $query_run = mysqli_query($con,$query);
}

function update_count(){
    $query = "SELECT count FROM hits_count";
    global $con;
    if($query_run = mysqli_query($con,$query)){
        $count = mysqli_fetch_assoc($query_run);
        // echo $count['count'];
        $count_inc = $count['count'] + 1;
        $query_update = "UPDATE hits_count SET count = $count_inc";
        @$query_update_run = mysqli_query($con, $query_update);
    }else{
        echo "error";
    }
}
if(!ip_exist($user_ip)){
    update_count();
    ip_add($user_ip);
}

?>