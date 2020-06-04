<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width"/>
<title>Sistema de Leitura JRE</title>
<link href="jquery.dataTables.min.css" rel="stylesheet" type="text/css">
<link href="responsive.dataTables.min.css" rel="stylesheet" type="text/css">
<script src="jquery-1.12.4.js"></script>
<script src="jquery.dataTables.min.js"></script>
<script src="dataTables.responsive.min.js"></script>
</head>
<script>
$(document).ready(function() {
    $('#example').DataTable();
} );
</script>

<?php
error_reporting(0);
ini_set(“display_errors”, 0 );
session_start();
if($_SESSION['logado'] != "sim") die("Voce nao esta logado no sistema");

require_once("db.php");

$query = "SELECT * FROM user WHERE username = '".$_SESSION['usuario']."'";
$result = mysql_query($query);
$row = mysql_fetch_array($result);

echo "<center>";
echo "<h1>Seja bem vindo, <a href='perfil2.php?user=".$_SESSION['usuario']."'>".$row[1]."</a></h1><h4><a href='logout.php'><img src='images/sair.png' alt='sair'></a> &nbsp";
echo "&nbsp <a href='usuarios.php'><img src='images/gerenciar.png' alt='Gerenciar'></a>";
echo "</h4><h3>Operadores cadastrados:</h3>";?>

<table id="example" class="display responsive nowrap" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Usuario</th>
                <th>Nome do Operador</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
<?
$result = mysql_query("SELECT * FROM tablet WHERE username='".$row[2]."' ORDER BY id DESC");
while($row = mysql_fetch_array($result)) {
	echo "<tr><td>".$row[1]."</td>
           <td>".$row[2]."</td>
           <td><a href='leitura.php?operador=".$row[1]."'><img src='images/leitura.png' alt='Leitura'></a> <a href='leitura4.php?operador=".$row[1]."'><img src='images/detalhada.png' alt='Leitura'></a> <a href='consulta.php?operador=".$row[1]."'><img src='images/geral.png' alt='Acerto Geral'></a><a href='consulta2.php?operador=".$row[1]."'><img src='images/acertoponto.png' alt='Acerto Geral Ponto'></a><a href='consulta3.php?operador=".$row[1]."'><img src='images/acertomaquina.png' alt='Acerto Geral Ponto'></a><a href='AndroidFileUpload/uploads/".$row[1]."/'><img src='images/auditoria.png' alt='Auditoria'></a></td></tr>";
}
?>
          </tbody>
    </table>
</html>