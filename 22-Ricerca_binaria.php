<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Ricerca binaria</title>
</head>
<?php
function ricerca_binaria($nome_da_cercare)
{
$elenco=array("Anna","Bruno","Cora","Dino","Giuseppe","Moana","Nicola","Sandra");
$trovato=false;
$inizio=0;
$fine=sizeof($elenco);

while(($trovato==false) && ($inizio<=$fine))
{
if (fmod($fine-$inizio,2)==0) {$m=$inizio+(($fine-$inizio)/2);}
else {$m=$inizio+(($fine-$inizio)/2)-0.5;}
print("$elenco[$m] <br>");

if ($nome_da_cercare==$elenco[$m]) {$trovato=true;}
		else if ($nome_da_cercare<$elenco[$m]) {$fine=$m-1;}
			  else {$inizio=$m+1;}
} 
}
?>
<body>
<?php
ricerca_binaria("Anna");
?>
</body>
</html>