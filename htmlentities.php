<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        if(isset($_GET['name']) && isset($_GET['pass'])){
            $name = htmlentities($_GET['name']);
            $pass = htmlentities($_GET['pass']);
            if(!empty($name) && !empty($pass)){
                echo "name : ".$name.", password : ".$pass;
            }
        }
    ?>
    <form action="htmlentities.php" method="GET">
        name : <br><br><input type="text" name="name"><br><br>
        password : <br><br><input type="pass" name="pass"><br><br>
        <input type="submit" name="submit">
    </form>
</body>
</html>