<html>
<head>
<meta charset="utf-8" />
<title> Select su db MySql</title>
</head>
<body>
<?php
$connessione = mysql_connect("localhost","root","");
if (!$connessione)
{
die('Non posso connettermi:'. mysql_error());
}

echo "Connessione effettuata <br>";
$query_select = "SELECT * FROM prova.tabella1 WHERE ID=1";

$risultato = mysql_query($query_select);

//$righe = mysql_fetch_array($risultato);
//var_dump($righe);

While($righe = mysql_fetch_array($risultato))
{
echo 'Id utente ' . $righe['ID'] . ' Nome: '. $righe['nome'] .'<br/>';
}


//  questo è un commento

/*
questo è un altro commento
*/

/*$righe = mysql_fetch_array($risultato);
var_dump($righe);
echo "<br>";
echo 'Id utente ' . $righe['ID'] . ' Nome: '. $righe['nome'] .'<br/>';


$righe = mysql_fetch_array($risultato);
var_dump($righe);
echo "<br>";
echo 'Id utente ' . $righe['ID'] . ' Nome: '. $righe['nome'] .'<br/>';

$righe = mysql_fetch_array($risultato);
var_dump($righe);
echo "<br>";
echo 'Id utente ' . $righe['ID'] . ' Nome: '. $righe['nome'] .'<br/>';

$righe = mysql_fetch_array($risultato);
echo "<br>";
var_dump($righe);
*/
?>

</body>
</html>