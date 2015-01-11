<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Array Associativi </title>
</head>
<body>
<?php
/* primo modo per fare un array associativo*/
$age = array("Giovanni"=>35, "Roberta"=>"7", "Andrea"=>"43");

echo "Giovanni ha  ".$age['Giovanni']. " anni. <br>";
echo "Roberta ha ".$age['Roberta']." anni. <br>";

print (gettype($age['Giovanni']).'<br>');

print(gettype($age['Roberta']).'<br>');

var_dump($age);   // per visualizzare l'intero array age
echo "<br>"
?>
<div style="font-size:24px"> Secondo modo di creare un array </div>
<?php
/* secondo metodo per fare un array associativo*/
$age['Giovanni'] = "25";
$age['Roberta'] = "27";
$age['Andrea'] = "33";
$age['Matteo']=34;

for($i=0;$i<3;$i++)
{echo "<div> Giovanni ha " . $age['Giovanni'] . " anni. </div> <br>";
}

var_dump($age);

?>
</body>
</html>