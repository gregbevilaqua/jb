<?php

require_once("includes/db2.php");

$operador = addslashes($_GET['operador']);
$data = addslashes($_GET['data']);
$hora = addslashes($_GET['hora']);
$ponto = addslashes($_GET['ponto']);
$maquina = addslashes($_GET['maquina']);
$sangria = addslashes($_GET['sangria']);




$query = "INSERT INTO sangria VALUES(NULL,'".$operador."', '".$data."', '".$hora."', '".$ponto."','".$maquina."', '".$sangria."')";

$result = mysql_query($query) or die(mysql_error());
if($result) {
	echo "Ok";
}

?>
