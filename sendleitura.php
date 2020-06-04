<?php

require_once("includes/db2.php");

$operador = addslashes($_GET['operador']);
$data = addslashes($_GET['data']);
$hora = addslashes($_GET['hora']);
$ponto = addslashes($_GET['ponto']);
$maquina = addslashes($_GET['maquina']);
$entrada = addslashes($_GET['entrada']);
$saida = addslashes($_GET['saida']);
$acumulado = addslashes($_GET['acumulado']);

$query = "INSERT INTO leitura VALUES(NULL,'".$operador."', '".$data."', '".$hora."', '".$ponto."', '".$maquina."', '".$entrada."', '".$saida."', '".$acumulado."')";

$query2 = "UPDATE maquina SET entrada='".$entrada."', saida='".$saida."' WHERE operador ='".$operador."' AND ponto='".$ponto."' AND maquina='".$maquina."'";

$result = mysql_query($query) or die(mysql_error());
if($result) {
	echo "Ok";
}
$result2 = mysql_query($query2) or die(mysql_error());
if($result2) {
	echo "Ok";
}

?>
