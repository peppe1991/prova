<?php
 $FatturaNum = 548;
 $Nome = "Paolino";
 $Cognome = "Paperino";
 $GiorniLavorati = 234;
 $CostoGiornaliero = 145;
?>
<html>
   <head>
      <title>Fattura in PHP</title>
   </head>
   <body>
      <?php
       print("<h2>Fattura al signor $Nome $Cognome</h2>\n");
       print("<h3>Giorni lavorati: $GiorniLavorati</h3>\n");
       print("<h3>Costo Giornaliero: $CostoGiornaliero euro</h3>\n");
       print("<h3>Costo Totale: ");
       print($GiorniLavorati * $CostoGiornaliero);
       print(" euro</h3>\n");
      ?>
   </body>
</html>

