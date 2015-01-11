<html>
   <head>
      <title>Indicizzazione delle Stringhe</title>
   </head>
   <body>
      <?php
         $variabilestringa  = "paperino";
         print("Stringa originale: $variabilestringa <br><br>");
         print("Stringa verticale di lunghezza:".strlen($variabilestringa)." <br>");

        print($variabilestringa{0} ."<br><br><br><br>");
        
        
         for ($i=0;$i<strlen($variabilestringa);$i++)
         {
         print($variabilestringa{$i} . "<br>");
         }
         
         $variabilestringa{3}="g";
         print("<br> <br>");
     
     /* sostituzione tramite identificazione con if */
         for ($i=0;$i<strlen($variabilestringa);$i++)
         {
         	if ($variabilestringa{$i}=="n") { $variabilestringa{$i} ="k";}
        }         
         
         /*visualizzazione verticale*/
         
         for ($i=0;$i<strlen($variabilestringa);$i++)
         {
         print($variabilestringa{$i} . "<br>");
         }
      ?>
   </body>
</html>