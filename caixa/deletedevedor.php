<?php


require_once("includes/db2.php");

$id = addslashes($_GET['id']);

$query = "DELETE FROM devedor WHERE id = '".$id."'";
$result = mysql_query($query) or die(mysql_error());

header('Location: index.php?page=home');

?>
