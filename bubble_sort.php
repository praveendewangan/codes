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
            $a = array(2,5,3,7,1);
            $b = count($a);
            echo "<pre>";
            var_dump($a);
            echo "</pre>";
            for($i=0;$i<$b;$i++){
                  for($j=0;$j<$b-$i-1;$j++){
                        if($a[$j]>$a[$j+1]){
                              $temp = $a[$j];
                              $a[$j] = $a[$j+1];
                              $a[$j+1] = $temp;
                        }
                  }
            }
            echo "<pre>";
            var_dump($a);
            echo "</pre>";
      ?>
</body>
</html>