<?php

session_start();
if($_SESSION['logado'] != "sim") die("Voce nao esta logado no sistema");

require_once("db.php");

$user = $_GET['user'];
$newpwd = $_GET['passwd'];

$query = "UPDATE user SET passwd = ('".$newpwd."') WHERE username = '".$user."'";
$result = mysql_query($query) or die(mysql_error());

header('Location: home.php');

?>
