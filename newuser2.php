<?php
session_start();
require_once("includes/db2.php");
include ('includes/notification.php');
?>

<?php
$operador = addslashes($_GET['operador']);
$ponto = addslashes($_GET['ponto']);
$comissaoop = addslashes($_GET['comissaoop']);

$query = "INSERT INTO ponto VALUES(NULL,'".$operador."', '".$ponto."', '".$comissaoop."')";
$result = mysql_query($query) or die(mysql_error());

header('Location: index.php?page=home.php');
?>