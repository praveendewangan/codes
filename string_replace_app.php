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
        $offset = 0;
        if(isset($_POST['string']) && isset($_POST['search']) && isset($_POST['replace'])){
            $text = $_POST['string'];
            $search = $_POST['search'];
            $replace = $_POST['replace'];
            $search_length = strlen($search);
            if(!empty($text) && !empty($search) && !empty($replace)){
                while($strpos = strpos($text, $search, $offset)){
                    $offset = $strpos + $search_length;
                    $text = substr_replace($text,$replace,$strpos,$search_length); 
                }
                // $text = str_replace($search,$replace,$text);
                echo $text;
            }else{
                echo "Please fill in all fields";
            }
        }
    ?>
    <form action="string_replace_app.php" method="post">
        <textarea cols="35" rows="10" name="string"></textarea><br><br>
        <input type="text" name="search" placeholder="search"><br><br>
        <input type="text" name="replace" placeholder="replace"><br><br>
        <input type="submit" name="submit" ><br><br>
    </form>
</body>
</html>