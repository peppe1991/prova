<html>
   <head>
      <title>Ciclo while</title>
   </head>
   <body>
      <?php
         $row = 1;
         $maxrow = 10;
         while($row<=$maxrow)
         {
         print("Riga $row, ne mancano ancora " . ($maxrow - $row) ." <br>");
         $row++;
         }
       ?>
   </body>
</html>