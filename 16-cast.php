<html>
   <head>
      <title>Cast</title>
   </head>
   <body>
      <?php
       $intero = 54;
       $reale = 23.92;

       print('$intero + $reale = ' . ($intero + $reale) . " ed &egrave; di tipo ".gettype($intero + $reale)." <br>");
       print('$intero + $reale = ' . ($intero + (int)$reale) . "<br>");
       print('$intero + $reale = ' . (boolean)($intero + $reale) . "<br>");
       
       print("il valore reale $reale &egrave; arrotondato a ".round($reale));

      ?>
   </body>
</html>