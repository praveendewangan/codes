<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="calculator.php">
    <input type="text" name="op1"><br><br>
    <input type="text" name="op2"><br><br>
    <input type="submit" name="add" value="Addition">
    <input type="submit" name="subst" value="Substraction">
    <input type="submit" name="multiply" value="Multiplication">
    <input type="submit" name="div" value="Division">
    </form>
    <?php
    if(isset($_GET['add']) || isset($_GET['subst']) || isset($_GET['multiply']) || isset($_GET['div'])){
        $number1=$_GET['op1'];
        $number2=$_GET['op2'];

    }
    if(isset($_GET['add'])){
        $result = $number1+$number2;
    }
    elseif(isset($_GET['subst'])){
        $result = $number1-$number2;
    }
    elseif(isset($_GET['multiply'])){
        $result = $number1*$number2;
    }
    elseif(isset($_GET['div'])){
        $result = $number1/$number2;
    }
    if(isset($_GET['add']) || isset($_GET['subst']) || isset($_GET['multiply']) || isset($_GET['div'])){
        
    echo "$result";

    }
    ?>
</body>
</html>