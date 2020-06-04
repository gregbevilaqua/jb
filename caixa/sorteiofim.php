<?php

require_once("includes/db2.php");

$sorteio1 = addslashes($_POST['sorteio1']);
$sorteio2 = addslashes($_POST['sorteio2']);
$sorteio3 = addslashes($_POST['sorteio3']);
$sorteio4 = addslashes($_POST['sorteio4']);
$sorteio5 = addslashes($_POST['sorteio5']);
$sorteio6 = addslashes($_POST['sorteio6']);
$data1 = addslashes($_POST['data1']);
$data2 = addslashes($_POST['data2']);
$data3 = addslashes($_POST['data3']);
$data4 = addslashes($_POST['data4']);
$data5 = addslashes($_POST['data5']);
$data6 = addslashes($_POST['data6']);


$query = "UPDATE sorteio SET sorteio1 = '".$sorteio1."', sorteio2 = '".$sorteio2."', sorteio3 = '".$sorteio3."', sorteio4 = '".$sorteio4."', sorteio5 = '".$sorteio5."', sorteio6 = '".$sorteio6."', hora1 = '".$data1."', hora2 = '".$data2."', hora3 = '".$data3."', hora4 = '".$data4."', hora5 = '".$data5."', hora6 = '".$data6."'";
$result = mysql_query($query) or die(mysql_error());


header('Location: index.php?page=home');
?>
