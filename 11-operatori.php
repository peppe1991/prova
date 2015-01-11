<html>
   <head>
      <title>Operatori</title>
   </head>
   <body>
      <?php
        $left = 54;
        $right = 12;
        print("$left + $right = " . ($left + $right) . "<br>");
        print("$left - $right = " . ($left - $right) . "<br>");
        print("$left * $right = " . ($left * $right) . "<br>");
        print("$left / $right = " . ($left / $right) . "<br>");
        print("$left % $right = " . ($left % $right) . "<br>");
        print("$left++ : prima: $left esecuzione: " . ($left++) . " dopo: $left<br>");
        print("++$left : prima: $left esecuzione: " . (++$left) . " dopo: $left<br>");
        print("$right-- : prima: $right esecuzione: " . ($right--) . " dopo: $right<br>");
        print("--$right : prima: $right esecuzione: " . (--$right) . " dopo: $right<br>");
        
        $left=$left+0.1;
        print('il valore di $left &egrave; '.$left);
        
      ?>
   </body>
   </html>
   