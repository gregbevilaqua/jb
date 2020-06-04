<?php

require_once("includes/db2.php");

$idcambista = addslashes($_GET['idcambista']);

$query = "SELECT * FROM cambista WHERE idcambista = '".$idcambista."'";
$result = mysql_query($query) or die(mysql_error());

if(mysql_num_rows($result) == 0) die("ErrordeConexao");
echo "OkConectado";

?>
