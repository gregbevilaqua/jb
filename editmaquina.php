<?
require_once("includes/db2.php");

$id = $_GET['id'];
$operador = addslashes($_GET['operador']);
$ponto = addslashes($_GET['ponto']);
$comissaoop = addslashes($_GET['comissaoop']);
$maquina = addslashes($_GET['maquina']);
$entrada = addslashes($_GET['entrada']);
$saida = addslashes($_GET['saida']);
$moeda = addslashes($_GET['moeda']);
$comissao = addslashes($_GET['comissao']);

$query = "UPDATE maquina SET operador = '".$operador."', ponto = '".$ponto."', comissaoop = '".$comissaoop."', maquina = '".$maquina."', entrada = '".$entrada."', saida = '".$saida."', moeda = '".$moeda."', comissao = '".$comissao."'  WHERE id ='".$id."'";
$result = mysql_query($query) or die(mysql_error());

header('Location: index.php?page=home');

?>

