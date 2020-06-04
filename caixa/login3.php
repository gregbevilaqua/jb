<?php

require_once("db.php");

$safe_user = addslashes($_GET['login']);
$safe_pass = addslashes($_GET['passwd']);

$query = "SELECT * FROM user WHERE username = '".$safe_user."' AND passwd = '".$safe_pass."'";
$result = mysql_query($query) or die(mysql_error());

if(mysql_num_rows($result) == 0) die("Nome de usuario e/ou senha invalidos");

session_start();
$_SESSION['logado'] = "sim";
$_SESSION['usuario'] = $safe_user;
header('Location: home.php');

?>
