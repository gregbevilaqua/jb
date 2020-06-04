<?php

require_once("includes/db2.php");

$operador = addslashes($_GET['operador']);
$data = addslashes($_GET['data']);
$hora = addslashes($_GET['hora']);
$ponto = addslashes($_GET['ponto']);
$maquina = addslashes($_GET['maquina']);
$entca = addslashes($_GET['entca']);
$jacka = addslashes($_GET['jacka']);
$entcat = addslashes($_GET['entcat']);
$jackat = addslashes($_GET['jackat']);
$entcrs = addslashes($_GET['entcrs']);
$jackrs = addslashes($_GET['jackrs']);
$comissao = addslashes($_GET['comissao']);
$saldo = addslashes($_GET['saldo']);


$query = "INSERT INTO leitura2 VALUES(NULL,'".$operador."', '".$data."', '".$hora."', '".$ponto."', '".$maquina."', '".$entca."', '".$jacka."', '".$entcat."', '".$jackat."', '".$entcrs."', '".$jackrs."', '".$comissao."', '".$saldo."')";

$result = mysql_query($query) or die(mysql_error());
if($result) {
	echo "Ok";
}

?>
