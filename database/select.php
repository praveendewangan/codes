<?php
    @require('database.php');

    $query = "SELECT food , calories FROM food ORDER BY id";
    if($query_run = mysqli_query($con,$query)){
        echo "query success<br>";
        if(mysqli_num_rows($query_run) == NULL){
            echo "No data found";
        }else{
            while($row = mysqli_fetch_assoc($query_run)){
                $food = $row['food'];
                $calory = $row['calories'];
                echo "$food has $calory calories.<br>";
            }
        }
    }else{
        echo "query failed<br>";
        echo mysqli_error($con);
    }
?>