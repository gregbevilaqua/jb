<?php


require_once("includes/db2.php");

$id = addslashes($_GET['id']);
$jogo = addslashes($_GET['jogo']);
$str = strtolower($jogo);

$query = "DELETE FROM $str WHERE id = '".$id."' AND jogo = '".$jogo."'";
$result = mysql_query($query) or die(mysql_error());

header('Location: index.php?page=home');

?>
