<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Ricerca lineare</title>
</head>
 <?php

/*   $prova=15;*/
   
     function cerca($nome_da_cercare)
     {
     $elenco=array("Anna","Bruno","Cora","Dino","Giuseppe","Nicola","Sandra");
     $trovato=false;
     $i=0;     

 global $prova; 
$prova++;
print('variabile globale $prova:'.$prova.'<br>');     
     
     for ($i=0;$trovato==false && $i<sizeof($elenco);$i++)
		{  
    print("$elenco[$i] <br>");
	if ($elenco[$i]==$nome_da_cercare)	{$trovato=true;}
	}
	
 if ($trovato==true) print("$nome_da_cercare &egrave; in posizione:". ($i-1));
	else print("$nome_da_cercare non si trova in elenco.");
	
	return $trovato;
 }   
   ?>
<body>
<?php

$prova=15;

print("$prova<br><br>");

if (cerca("Giuseppe")==true) 
  {
  	 print("<br><br>Ha trovato il nome");
  }
  else {print("Il nome non c'&egrave;");}
echo '<br><br><br>';

print('variabile globale $prova all\'uscita della funzione:'.$prova.'<br>');     

?>  
</body>
</html>