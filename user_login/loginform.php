<?php
    
    if(isset($_POST['username']) && isset($_POST['password'])){
        $username = $_POST['username'];
        $user_password = $_POST['password'];
        $password_hash = md5($_POST['password']);
        // echo $password_hash;
            global $con;
        if(!empty($username) && !empty($user_password)){
            // echo "ok1<br/>";
            $query = "SELECT id FROM users where username='".mysqli_real_escape_string($con,$username)."' AND password='".mysqli_real_escape_string($con,$password_hash)."'";
            // var_dump($con);
            $query_run = mysqli_query($con,$query);
            if($query_run){
                // echo "ok2";
                $query_num_rows = mysqli_num_rows($query_run);
                // echo $query_num_rows;
                if($query_num_rows == 0){
                    echo "Invalid username and password";
                }else if($query_num_rows == 1){
                    $user_id = mysqli_fetch_assoc($query_run);
                    // echo($user_id['id']);
                    $_SESSION['user_id'] = $user_id['id'];
                    header('Location: index.php');
                }
            }else{
                echo mysqli_error($con);
            }
        }else{
            echo "Please enter username and password!";
        }
    }

?>

<form action="<?php echo $current_file;?>" method="POST">
Username : <input type="text" name="username"> Password : <input type="password" name="password">
<input type="submit" name="submit" value="Log In">
</form>