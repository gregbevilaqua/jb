<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width"/>
<title>Sistema de Leitura FCM Vs1.00</title>
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
if($_SESSION['logado'] != "sim") die("Voce nao esta logado //no sistema");

require_once("db.php");

$operador = $_GET['operador'];
echo "<center>";
echo "<h1>Acertos Realizados</h1>";
echo "<h3>Operador: ".$operador."</h3>";

$query = "SELECT * FROM leitura2 WHERE operador ='".$operador."' ORDER BY data DESC";
$result = mysql_query($query) or die(mysql_error());
?>

<table id="example" class="display responsive nowrap" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Operador</th>
                <th>Data</th>
                <th>Hora</th>
                <th>Ponto</th>
                <th>Maquina</th>
                <th>Ent. Anterior</th>
                <th>Saida Anterior</th>
                <th>Entrada Atual</th>
                <th>Saida Atual</th>
                <th>Entrada em R$</th>
                <th>Saida em R$</th>
                <th>Comissao</th>
                <th>Saldo</th>
                <th>Apagar</th>
            </tr>
        </thead>
        <tbody>
<?
while($row = mysql_fetch_array($result)) {
	echo "<tr>
        <td>".$row[1]."</td>
        <td>".$row[2]."</td>
        <td>".$row[3]."</td>
        <td>".$row[4]."</td>
        <td>".$row[5]."</td>
        <td>".$row[6]."</td>
        <td>".$row[7]."</td>
        <td>".$row[8]."</td>
        <td>".$row[9]."</td>
        <td>R$".($row[10])."</td>
        <td>R$".($row[11])."</td>
        <td>R$".($row[12])."</td>
        <td>R$".($row[13])."</td>
        <td><a href='deletelinha.php?id=".$row[0]."'><img src='images/delete.png'></a></td>
        </tr>";
} 
?>
          </tbody>
    </table>
</html>
<?php
require_once("db.php");

$operador = $_GET['operador'];
echo "<center>";
echo "<h1>Acertos Realizados</h1>";
echo "<h3>Operador: ".$operador."</h3>";

$query_valor = "SELECT SUM(saldo)as SOMA FROM leitura2 WHERE operador ='fcm5' ORDER BY data DESC";
$result_valor = mysql_query($query_valor);
while ($rows = mysql_fetch_assoc($result_valor)) {
     echo $rows["SOMA"];
}
?>