<?php

session_start();
if($_SESSION['logado'] != "sim") die("Voce nao esta logado no sistema");

require_once("db.php");

$id = addslashes($_GET['id']);

$query = "DELETE FROM leitura WHERE id = '".$id."'";
$result = mysql_query($query) or die(mysql_error());

header('Location: home.php');

?>
