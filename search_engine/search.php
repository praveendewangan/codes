<?php
require "database.php";
global $con;
var_dump($con);
if(isset($_POST['search_name'])){
    $search_name = $_POST['search_name'];
    if(!empty($search_name)){
        if(strlen($search_name) >= 4){
            $query = "SELECT name from name where name LIKE '%".mysqli_real_escape_string($con,$search_name)."%'";
            $query_run = mysqli_query($con,$query);
            // var_dump($con);
            $query_num_rows = mysqli_num_rows($query_run);
            if($query_num_rows >= 1){
                echo "$query_num_rows results Found:</br>";
                while($query_row = mysqli_fetch_assoc($query_run)){
                    echo $query_row['name']."</br>";
                }
            }else{
                echo "No results found!";
            }

        }else{
            echo "Your keyword must be 5 characters or more";
        }
    }
}
?>
<form action="search.php" method="POST">
    Name : <input type="text" name="search_name" >  <input type="submit" value="sumit">
</form>