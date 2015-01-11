<html>
   <head>
      <title>Array monodimensionale</title>
   </head>
   <body>
   <table border="1">
      <?php
         $vocali = array ("A", "E", "I", "O", "U");
         print("<tr><td>".count($vocali)."</td><td></td><td></td><td></td><td></td></tr>");
         
         print("<tr><td colspan=\"" . count($vocali) . "\">");
         print("<span style=\"font-weight:bold\">Le vocali sono: </span> ");
         print("</td></tr>");
         print("<tr>");
         foreach ($vocali as $k => $v) 
         {
            print("<td>$v ($k)</td>");
         }
         print("</tr>");
         print("<tr>");
         for($n_cella=0;$n_cella<count($vocali);$n_cella++)
         {
         	print("<td>$vocali[$n_cella] ($n_cella)</td>");
         }
         print("</tr>");
         
         $array_generico=array(5.56,'io sono una stringa',4,true);
         var_dump($array_generico);
      ?>
   </table>
   </body>
</html>