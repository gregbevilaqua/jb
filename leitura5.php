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

session_start();
if($_SESSION['logado'] != "sim") die("Voce nao esta logado //no sistema");

require_once("db.php");

$operador = $_GET['operador'];
echo "<center>";
echo "<h1>Acertos Realizados por Ponto</h1>";
echo "<h3>Operador: ".$operador."</h3>";

$query = "SELECT * FROM acerto WHERE operador ='".$operador."' ORDER BY data DESC";
$result = mysql_query($query) or die(mysql_error());
?>

<table id="example" class="display responsive nowrap" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Operador</th>
                <th>Data</th>
                <th>Hora</th>
                <th>Ponto</th>
                <th>Entrada em R$</th>
                <th>Saida em R$</th>
                <th>Despesa 1</th>
                <th>R$ </th>
                <th>Despesa 2</th>
                <th>R$ </th>
                <th>Despesa 3</th>
                <th>R$ </th>
                <th>Despesa 4</th>
                <th>R$ </th>
                <th>Despesa 5</th>
                <th>R$ </th>
                <th>Saldo</th>
                <th>Comissao</th>
            </tr>
        </thead>
        <tbody>
<?
while($row = mysql_fetch_array($result)) {
	echo "<tr>
        <td>".$row[0]."</td>
        <td>".$row[1]."</td>
        <td>".$row[2]."</td>
        <td>".$row[3]."</td>
        <td>".$row[4]."</td>
        <td>".$row[5]."</td>
        <td>".$row[6]."</td>
        <td>".$row[7]."</td>
        <td>".$row[8]."</td>
        <td>".$row[9]."</td>
        <td>".$row[10]."</td>
        <td>".$row[11]."</td>
        <td>".$row[12]."</td>
        <td>".$row[13]."</td>
        <td>".$row[14]."</td>
        <td>".$row[15]."</td>
        <td>".$row[16]."</td>
        <td>".$row[17]."</td>
        </tr>";
} 
?>
          </tbody>
    </table>
</html>
