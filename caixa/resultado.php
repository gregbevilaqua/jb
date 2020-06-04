<?php

require_once("includes/db2.php");

$ponto = addslashes($_POST['ponto']);
$data = addslashes($_POST['data']);
$premio1 = addslashes($_POST['premio1']);
$premio2 = addslashes($_POST['premio2']);
$premio3 = addslashes($_POST['premio3']);
$premio4 = addslashes($_POST['premio4']);
$premio5 = addslashes($_POST['premio5']);
$premio6 = addslashes($_POST['premio6']);
$premio7 = addslashes($_POST['premio7']);


$query = "INSERT INTO resultado VALUES(NULL, '".$ponto."', '".$data."', '".$premio1."', '".$premio2."', '".$premio3."', '".$premio4."', '".$premio5."', '".$premio6."', '".$premio7."')";
$result = mysql_query($query) or die(mysql_error());


header('Location: index.php?page=home');
?>
