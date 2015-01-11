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

$query_insert="INSERT INTO prova.tabella1 VALUES('4','gianni')";
mysql_query($query_insert);

$query_select = "SELECT * FROM prova.tabella1";

$risultato = mysql_query($query_select);

While($righe = mysql_fetch_array($risultato))
{

echo 'Id utente ' . $righe['ID'] . ' Nome: '. $righe['nome'] .'<br/>';

}


$query_delete="DELETE FROM prova.tabella1 WHERE prova.tabella1.ID='4'";
mysql_query($query_delete);

$query_select = "SELECT * FROM prova.tabella1";

$risultato = mysql_query($query_select);

While($righe = mysql_fetch_array($risultato))
{

echo 'Id utente ' . $righe['ID'] . ' Nome: '. $righe['nome'] .'<br/>';

}

?>
</body>
</html>