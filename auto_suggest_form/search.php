<?php
if(isset($_GET['search_text'])){
    $search_text = $_GET['search_text'];
}
if(!empty($search_text)){
    if($con = @mysqli_connect('localhost','root','')){
        if(@mysqli_select_db($con,'user_login')){
            $query = "SELECT `username` FROM `users` WHERE `username` LIKE '".mysqli_real_escape_string($con,$search_text)."%'";
            $query_run = mysqli_query($con,$query);
    
            while($query_row = mysqli_fetch_assoc($query_run)){
                echo $name = $query_row['username'].'<br>';
            }
        }
    }
}
?>