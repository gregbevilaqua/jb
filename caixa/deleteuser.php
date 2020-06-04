<?php

require_once("includes/db2.php");

$id = addslashes($_GET['id']);
$user = addslashes($_GET['user']);


$query = "DELETE FROM cambista WHERE nome = '".$user."'";
$result = mysql_query($query) or die(mysql_error());
$query2 = "DELETE FROM acemaq WHERE operador = '".$user."'";
$result2 = mysql_query($query2) or die(mysql_error());
$query3 = "DELETE FROM acerto WHERE operador = '".$user."'";
$result3 = mysql_query($query3) or die(mysql_error());
$query4 = "DELETE FROM devedor WHERE operador = '".$user."'";
$result4 = mysql_query($query4) or die(mysql_error());
$query5 = "DELETE FROM leitura WHERE operador = '".$user."'";
$result5 = mysql_query($query5) or die(mysql_error());
$query6 = "DELETE FROM leitura2 WHERE operador = '".$user."'";
$result6 = mysql_query($query6) or die(mysql_error());
$query7 = "DELETE FROM pagamento WHERE operador = '".$user."'";
$result7 = mysql_query($query7) or die(mysql_error());
$query8 = "DELETE FROM sangria WHERE operador = '".$user."'";
$result8 = mysql_query($query8) or die(mysql_error());

header('Location: index.php?page=home');

?>
