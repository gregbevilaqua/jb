<?php
session_start();
require_once("includes/db2.php");
include ('includes/notification.php');
?>

<?php

$gerente= addslashes($_GET['gerente']);
$senhagerente = addslashes($_GET['senhagerente']);

$query = "INSERT INTO gerente VALUES(NULL, '".$gerente."', '".$senhagerente."')";
$result = mysql_query($query) or die(mysql_error());

header('Location: index.php?page=home.php');
?>