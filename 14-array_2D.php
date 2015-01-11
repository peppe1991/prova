<html>
   <head>
      <title>Array 2D</title>
   </head>
   <body>
<table border="1">    
      <?php
      $matrice=array();  /* array vuoto*/      
      $contatore=0;
      
     for($conta = 1; $conta <= 4; $conta++)
       for($conta2 = 1; $conta2<= 4; $conta2++) 
	    {      $matrice[$conta][$conta2]=$contatore++;
	 }     
	 
	   	for($conta = 1; $conta <= 4; $conta++)
	   	{ 
	   	print("<tr>");
    	 for($conta2 = 1; $conta2<= 4; $conta2++) 
	    { print('<td>'.$matrice[$conta][$conta2].'</td>');
	    }
	    print('</tr>');
	    }  
      ?>
     </table>
 
   </body>
</html>