<?php

require_once("db.php");

$idprod = addslashes($_GET['idprod']);
$dono = addslashes($_GET['dono']);
$data = addslashes($_GET['data']);

$query = "INSERT INTO tablet VALUES(NULL, '".$idprod."', 'NOVO', '".$dono."', '".$data."', 0, 0)";
$result = mysql_query($query) or die(mysql_error());

?>
