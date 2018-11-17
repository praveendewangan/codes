<?php
require "core.php";
require "database.php";
if(!loggedin()){
    if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['password_again']) && isset($_POST['firstname']) && isset($_POST['surname'])){
        $username = simplify($_POST['username']);
        $password = simplify($_POST['password']);
        $password_again = simplify($_POST['password_again']);
        $firstname = simplify($_POST['firstname']);
        $surname = simplify($_POST['surname']);
        $password_hash = md5($password);

        if(!empty($username) && !empty($password) && !empty($password_again) && !empty($firstname) && !empty($surname)){
            if(strlen($username)>30 || strlen($password)>32 || strlen($firstname)>16 || strlen($username)>16){
                echo "You have reached max character length!";
            }else{
                if($password != $password_again){
                    echo "Passwords do not matches!";
                }else{
                    $query = "SELECT `username` FROM users WHERE `username`='$username'";
                    $query_run = mysqli_query($con,$query);
                    if(mysqli_num_rows($query_run) == 1){
                        echo "Username $username already exist!";
                    }else{
                        $query = "INSERT INTO `users` VALUES('','".mysqli_real_escape_string($con,$username)."','".mysqli_real_escape_string($con,$password_hash)."','".mysqli_real_escape_string($con,$firstname)."','".mysqli_real_escape_string($con,$surname)."')";
                        if($query_run = mysqli_query($con,$query)){
                            header("Location: register_success.php");
                        }else{
                            echo "Sorry! We couldn\'t registered you at this time. Try again later";
                        }
                    }
                }
            }
        }else{
            echo "All fields are required!";
        }
    }
?>

<form action="register.php" method="POST">
    Username : <br/><input type="text" name="username" maxlength="30" value="<?php if(isset($username)){echo $username;}?>"><br/><br/>
    Password : <br/><input type="password" name="password" maxlength="32" value="<?php if(isset($password)){echo $password;}?>"><br/><br/>
    Password Again : <br/><input type="password" name="password_again" maxlength="32" value="<?php if(isset($password_again)){echo $password_again;}?>"><br/><br/>
    Firstname : <br/><input type="text" name="firstname" maxlength="16" value="<?php if(isset($firstname)){echo $firstname;}?>"><br/><br/>
    Surname : <br/><input type="text" name="surname" maxlength="16" value="<?php if(isset($surname)){echo $surname;}?>"><br/><br/>
    <input type="submit" value="Register">
</form>
<?php    
}else if(loggedin()){
    echo "You are already register and logged in!";
}
function simplify($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
}
?>