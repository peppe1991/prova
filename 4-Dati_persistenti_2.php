<html>
   <head>
      <title>Il tuo compenso</title>
   </head>
   <body>
      <?php
       print("<h2>Compenso del signor $_REQUEST[Nome] $_REQUEST[Cognome]</h2>\n");
       print("<h3>Giorni lavorati: $_REQUEST[GiorniLavorati]</h3>\n");
       print("<h3>Costo Giornaliero: $_REQUEST[CostoGiornaliero] euro</h3>\n");
       print("<h3>Costo Totale: ");
       print($_REQUEST['GiorniLavorati'] * $_REQUEST['CostoGiornaliero']);
       print(" euro</h3>\n");
      ?>
   </body>
</html>