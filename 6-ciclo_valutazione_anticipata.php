<html>
   <head>
      <title>Estrazioni del lotto</title>
   </head>
   <body>
    <table border = "1" >
      <?php
    	for($ruota = 1; $ruota <= 12; $ruota++)
	    {
            print("<tr>");
            print("<td>Ruota $ruota</td>");
            print("</tr>");
    	}
		?>
		</table>
		<table border="1">
		
		<?php    	
    	for($n = 1; $n <= 5; $n++)
	        {
			print("<tr>");    		
    		print("<td>". mt_rand(1,90) ."</td>");
			print("</tr>");        	
        	}
        	
        	print('<tr><td>il valore di $ruota &egrave; :'.$ruota.'</td></tr>');
        	
      ?>
    </table>

<?php  
    	for($ruota = 1; $ruota <= 12; $ruota+=0.1)
	                  print("Ruota: $ruota<br>");

		?>
   </body>
</html>