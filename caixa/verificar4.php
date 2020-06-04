<?php

require_once("includes/db2.php");

$idprod = addslashes($_GET['idprod']);
$dono = addslashes($_GET['dono']);

$query = "SELECT * FROM user WHERE LastName= '".$idprod."' AND Password= '".$dono."'";
$result = mysql_query($query) or die(mysql_error());

if(mysql_num_rows($result) == 0) die("ErrordeConexao");
echo "OkConectado";

?>
