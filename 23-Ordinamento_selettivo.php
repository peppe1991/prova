<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Ordinamento Selettivo</title>
</head>
<?php

?>
<body>
<?php
$A =array(19,41,12,63,22);
$temp=0;

printf("<h1>Array disordinato:</h1>");

for($i=0;$i<sizeof($A);$i++) print("$A[$i] <br>");

for ($i=0;$i<sizeof($A);$i++) 
	for ($j=$i+1;$j<sizeof($A);$j++)
		if ($A[$i]>$A[$j])
			{    $temp=$A[$i];
   				$A[$i]=$A[$j];
   				$A[$j]=$temp;
   		}


print("<h1> Array ordinato </h1>");
for($i=0;$i<sizeof($A);$i++) print("$A[$i] <br>");
?>
</body>
</html>