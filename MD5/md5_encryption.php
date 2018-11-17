<?php
    if(isset($_POST['password']) && !empty($_POST['password'])){
        $password = md5($_POST['password']);

        $filename = 'hash.txt';
        $handle = fopen($filename,'r');
        $get_password = md5(fread($handle,filesize($filename)));
        // echo $get_password;
        // echo "<br>".$password;
        if($password == $get_password){
            echo "Correct Password";
        }else{
            echo "Incorrect Password";
        }
        
    }else{
        echo "Please enter a password";
    }

?>

<form action="md5_encryption.php" method="post">
    Password : <input type="text" name="password"><br><br>
    <input type="submit">
</form>