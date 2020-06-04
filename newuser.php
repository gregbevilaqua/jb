<?php
session_start();
require_once("includes/db2.php");
include ('includes/notification.php');
?>

<?php

$idcambista = addslashes($_GET['idcambista']);
$nome = addslashes($_GET['nome']);
$comissao = addslashes($_GET['comissao']);
$administracao = addslashes($_GET['administracao']);
$parceria = addslashes($_GET['parceria']);
$regiao = addslashes($_GET['regiao']);
$gerente = addslashes($_GET['gerente']);
$semana = addslashes($_GET['semana']);

$query = "INSERT INTO cambista VALUES(NULL, '".$idcambista."', '".$nome."', '".$comissao."', '".$administracao."', '".$parceria."', '".$regiao."', '".$gerente."', '".$semana."')";
$result = mysql_query($query) or die(mysql_error());

header('Location: index.php?page=home.php');
?>