<html>
<head>
<meta charset="utf-8" />
<title>Tipi di variabili</title>
</head>
<body>
<?php
$una_stringa="ciao";
$un_numero_intero=8;
$un_numero_con_la_virgola=1.5456;
$un_valore_booleano=true;
$una_stringa_numerica="8.5";

print('la variabile $una_stringa è '.gettype($una_stringa).'<br>');
print('la variabile $un_numero_intero è '.gettype($un_numero_intero).'<br>');
print('la variabile $un_numero_con_la_virgola è '.gettype($un_numero_con_la_virgola).'<br>');
print('la variabile $un_valore_booleano è '.gettype($un_valore_booleano).'<br>');
print('la variabile $una_stringa_numerica è '.gettype($una_stringa_numerica).'<br>');

print('la variabile $una_stringa contiene: '.$una_stringa.'<br>');
print('la variabile $un_numero_intero contiene: '.$un_numero_intero.'<br>');

print($una_stringa_numerica.'<br>');
print(($una_stringa_numerica+1).'<br>');
print($una_stringa_numerica.'<br>');
print($una_stringa+1);

$risultato=$una_stringa_numerica+1;
print('<br> il risultato è '.$risultato.' ed è di tipo '.gettype($risultato).'<br>');

?>
</body>
</html>