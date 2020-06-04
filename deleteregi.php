<?php

require_once("includes/db2.php");

$id = addslashes($_GET['id']);
$user = addslashes($_GET['user']);


$query = "DELETE FROM milhar WHERE regiao = '".$user."'";
$result = mysql_query($query) or die(mysql_error());
$query2 = "DELETE FROM milharin WHERE regiao = '".$user."'";
$result2 = mysql_query($query2) or die(mysql_error());
$query3 = "DELETE FROM mc WHERE regiao = '".$user."'";
$result3 = mysql_query($query3) or die(mysql_error());
$query4 = "DELETE FROM centena WHERE regiao = '".$user."'";
$result4 = mysql_query($query4) or die(mysql_error());
$query5 = "DELETE FROM centenain WHERE regiao = '".$user."'";
$result5 = mysql_query($query5) or die(mysql_error());
$query6 = "DELETE FROM dezena WHERE regiao = '".$user."'";
$result6 = mysql_query($query6) or die(mysql_error());
$query7 = "DELETE FROM duquedeze WHERE regiao = '".$user."'";
$result7 = mysql_query($query7) or die(mysql_error());
$query8 = "DELETE FROM ternode WHERE regiao = '".$user."'";
$result8 = mysql_query($query8) or die(mysql_error());
$query9 = "DELETE FROM ternogp WHERE regiao = '".$user."'";
$result9 = mysql_query($query9) or die(mysql_error());
$query10 = "DELETE FROM duquegp WHERE regiao = '".$user."'";
$result10 = mysql_query($query10) or die(mysql_error());
$query11 = "DELETE FROM grupo WHERE regiao = '".$user."'";
$result11 = mysql_query($query11) or die(mysql_error());
$query12 = "DELETE FROM passevai WHERE regiao = '".$user."'";
$result12 = mysql_query($query12) or die(mysql_error());
$query13 = "DELETE FROM regiao WHERE regiao = '".$user."'";
$result13 = mysql_query($query13) or die(mysql_error());

header('Location: index.php?page=home');

?>