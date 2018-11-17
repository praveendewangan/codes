
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
      function fun($n){
            $i = 1;
            $prime = 0;
            while($i){
                  if($prime == $n)
                  {
                        break;
                  }
                  $count=0;
                  for($j=1;$j<=$i;$j++){
                        if($i%$j == 0){
                              $count++;
                        }
                  }
                  if($count == 2){
                        echo "$i, ";
                        $prime++;
                  } 
                  $i++;
            }
      }
      fun(15);
      echo "<br>";
      function play($n){
          for($i=1;$i<=$n;$i++){
              $count=0;
              for($j=1;$j<=$i;$j++){
                  if($i%$j == 0){
                      $count++;
                  }
              }
              if($count == 2){
                  echo $i.", ";
              }
          }
      }
      play(15);
      ?> 

      </body>
      </html>