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
            $num = 153;
            $n = $num;
            $m = $num;
            $count = 0;
            $sum = 0;
            while($n != 0){
                  $n = (int)$n/10;
                  if($n != 0)
                  $count++;
            }
            // echo $count;
            function fun($a, $counter){
                        $total = 1;
                        $number = 0;
                        while($counter != $number){
                              $total *= $a;
                              $number++;
                        }
                        return $total;
            }
            // echo $count;
            while($m != 0){
                  $a = $m%10;
                  $sum = $sum + fun($a,$count);
                  $m = $m/10;
            }
            if($num == $sum){
                  echo "this is a prime number";
            }else{
                  echo "not a prime number";
            }
      ?>
</body>
</html>