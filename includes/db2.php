<?php
/*
Configura conex�o com o banco de dados MySql
Editar as configura��es com as informa��es do servidor
*/

$server = "localhost"; 
$user = "petgame_user"; //Usuario mysql
$pass = "clara2018"; //Senha
$db = "petgame_base"; //Nome do banco de dados

$conn = mysql_connect($server, $user, $pass) or die("Erro na conex�o\n".mysql_error());
$db_conn = mysql_select_db($db, $conn) or die("Erro ao selecionar o banco de dados\n".mysql_error());

?>



