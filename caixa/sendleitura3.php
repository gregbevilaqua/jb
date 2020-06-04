<?php

require_once("includes/db2.php");

$operador = addslashes($_GET['operador']);
$data = addslashes($_GET['data']);
$hora = addslashes($_GET['hora']);
$ponto = addslashes($_GET['ponto']);
$entcrs = addslashes($_GET['entcrs']);
$jackrs = addslashes($_GET['jackrs']);
$despesa1 = addslashes($_GET['despesa1']);
$vdespesa1 = addslashes($_GET['vdespesa1']);
$despesa2 = addslashes($_GET['despesa2']);
$vdespesa2 = addslashes($_GET['vdespesa2']);
$despesa3 = addslashes($_GET['despesa3']);
$vdespesa3 = addslashes($_GET['vdespesa3']);
$despesa4 = addslashes($_GET['despesa4']);
$vdespesa4 = addslashes($_GET['vdespesa4']);
$despesa5 = addslashes($_GET['despesa5']);
$vdespesa5 = addslashes($_GET['vdespesa5']);
$saldo = addslashes($_GET['saldo']);
$comissao = addslashes($_GET['comissao']);



$query = "INSERT INTO acerto VALUES(NULL,'".$operador."', '".$data."', '".$hora."', '".$ponto."','".$entcrs."', '".$jackrs."', '".$despesa1."', '".$vdespesa1."', '".$despesa2."', '".$vdespesa2."', '".$despesa3."', '".$vdespesa3."', '".$despesa4."', '".$vdespesa4."', '".$despesa5."', '".$vdespesa5."', '".$saldo."', '".$comissao."')";

$result = mysql_query($query) or die(mysql_error());
if($result) {
	echo "Ok";
}

?>
