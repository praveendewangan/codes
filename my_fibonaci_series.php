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
            $num1 = 0;
            $num2 = 1;
            echo "$num1, $num2 ,";
            $count = 0;
            while($count < 10){
                  $num3 = $num1 + $num2;
                  echo "$num3, ";
                  $num1 = $num2;
                  $num2 =$num3;
                  $count++;
            }
      ?>
</body>
</html>