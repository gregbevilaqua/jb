<?php
session_start();
require_once("includes/db2.php");
include ('includes/notification.php');
?>

<?php
$operador = addslashes($_GET['operador']);
$ponto = $_POST['ponto'];
$maquina = $_POST['maquina'];
$entrada = $_POST['entrada'];
$saida = $_POST['saida'];
$moeda = $_POST['moeda'];
$comissao = $_POST['comissao'];


$query3 = "SELECT comissaoop FROM ponto WHERE ponto ='".$ponto."'";
$result3 = mysql_query($query3);
$value = mysql_result($result3, 0);


$query = "INSERT INTO maquina VALUES(NULL,'".$operador."', '".$ponto."', '".$value."', '".$maquina."', '".$entrada."', '".$saida."', '".$moeda."', '".$comissao."')";
$result = mysql_query($query) or die(mysql_error());

header('Location: http://www.medusas.com.br/index.php?page=home.php');
?>