<?php

require_once("includes/db2.php");

$operador = addslashes($_GET['operador']);
$data = addslashes($_GET['data']);
$hora = addslashes($_GET['hora']);
$ponto = addslashes($_GET['ponto']);
$maquina = addslashes($_GET['maquina']);
$pagamento = addslashes($_GET['pagamento']);




$query = "INSERT INTO pagamento VALUES(NULL,'".$operador."', '".$data."', '".$hora."', '".$ponto."','".$maquina."', '".$pagamento."')";

$result = mysql_query($query) or die(mysql_error());
if($result) {
	echo "Ok";
}

?>
