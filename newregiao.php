<?php
session_start();
require_once("includes/db2.php");
include ('includes/notification.php');
?>

<?php

$regiao = addslashes($_GET['regiao']);
$codregiao = addslashes($_GET['codregiao']);

$query = "INSERT INTO regiao VALUES(NULL, '".$regiao."', '".$codregiao."')";
$result = mysql_query($query) or die(mysql_error());

header('Location: index.php?page=home.php');
?>