<?php

require_once("includes/db2.php");

$user = $_GET['user'];
$newpwd = $_GET['passwd'];

$query = "UPDATE tablet SET dono = ('".$newpwd."') WHERE idprod = '".$user."'";
$result = mysql_query($query) or die(mysql_error());

header('Location: index.php?page=home');

?>
