<?php

require_once("includes/db2.php");

$operador = addslashes($_GET['operador']);
$data = addslashes($_GET['data']);
$hora = addslashes($_GET['hora']);
$ponto = addslashes($_GET['ponto']);
$devedor = addslashes($_GET['devedor']);





$query = "INSERT INTO devedor VALUES(NULL,'".$operador."', '".$data."', '".$hora."', '".$ponto."','".$devedor."')";

$result = mysql_query($query) or die(mysql_error());
if($result) {
	echo "Ok";
}

?>
