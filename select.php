<?php
include("conecta.php");

$sql = "SELECT `nome_func`, `sobrenome_func` FROM `funcionarios` GROUP BY nome_func,sobrenome_func ORDER BY nome_func ASC;"; 
$result = mysql_query($sql, $conecta); 

header('Content-type: text/html; charset=ISO-8859-1');
while($consulta = mysql_fetch_array($result)) { 
   print "Nome: $consulta[nome_func] $consulta[sobrenome_func]</br>"; 
} 
?>
