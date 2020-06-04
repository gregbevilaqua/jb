<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width"/>
<title>Sistema de Leitura FCM vs1.00</title>
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

require_once("includes/db2.php");

$operador = $_GET['operador'];
echo "<center>";
echo "<h1>Leitura</h1>";
echo "<h3>Operador: ".$operador."</h3>";

$query = "SELECT * FROM leitura WHERE operador ='".$operador."' ORDER BY data DESC";
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
                <th>Entrada</th>
                <th>Saida</th>
                <th>Valor Moeda</th>
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
        <td><a href='deletelinh2.php?id=".$row[0]."'><img src='images/delete.png'></a></td>
        </tr>";
} 
?>
          </tbody>
    </table>
</html>