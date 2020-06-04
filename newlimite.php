<?php

require_once("includes/db2.php");
include ('includes/notification.php');

$milhar = addslashes($_GET['milhar']);
$mc = addslashes($_GET['mc']);
$mi = addslashes($_GET['mi']);
$centena = addslashes($_GET['centena']);
$ci = addslashes($_GET['ci']);
$dezena = addslashes($_GET['dezena']);
$duquedeze = addslashes($_GET['duquedeze']);
$ternodeze = addslashes($_GET['ternodeze']);
$grupo = addslashes($_GET['grupo']);
$duquegp = addslashes($_GET['duquegp']);
$ternogp = addslashes($_GET['ternogp']);
$passevai = addslashes($_GET['passevai']);

$query = "UPDATE limitecredito SET milhar = '".$milhar."', mc = '".$mc."', mi = '".$mi."', centena = '".$centena."', ci = '".$ci."', dezena = '".$dezena."', duquedeze = '".$duquedeze."', ternodeze = '".$ternodeze."', grupo = '".$grupo."', duquegp = '".$duquegp."', ternogp = '".$ternogp."', passevai = '".$passevai."'";
$result = mysql_query($query) or die(mysql_error());

header('Location: index.php?page=home.php');
?>

