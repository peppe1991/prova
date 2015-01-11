<html>
   <head>
      <title>Concatenazione di stringhe</title>
   </head>
   <body>
      <?php
      /*ciao sto modificando*/ 
       $a ="Pippo";
       $b = "Pluto";
       $c="Paperino";
       
      print("$a &egrave; amico di $b che &egrave; amico di $c <br>");
      print('$a &egrave; amico di $b che &egrave; amico di $c <br>');
      print($a.' &egrave; amico di '.$b.' che &egrave; amico di '.$c.'<br>');
      print("$a &egrave; amico di ".$b.' che &egrave; amico di '.$c.'<br>');
               print('stampo un singolo apice: \' e un doppio apice: " <br>');
         print("stampo un singolo apice: ' e un doppio apice: \" <br>");
         
         $d=$a.$b.$c;
         print("<br> <br> $d");      
         
       $e ='Pippo';
       $f= 'Pluto';
       $g='Paperino';
       
       $h=$e.$f.$g;
       
        print("<br> <br> $h");      
         
      ?>
   </body>
</html>