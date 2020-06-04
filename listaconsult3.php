<?php
error_reporting(0);
ini_set(“display_errors”, 0 );
session_start();
if($_SESSION['logado'] != "sim") die("Voce nao esta logado //no sistema");
include("db.php");
$operador = $_GET['operador'];
function ConverteData($Data){
if (strstr($Data, "/"))//verifica se tem a barra /
{
$d = explode ("/", $Data);//tira a barra
$rstData = "$d[0]/$d[1]/$d[2]";//separa as datas $d[2] = ano $d[1] = mes etc...
return $rstData;
} elseif(strstr($Data, "-")){
$d = explode ("-", $Data);
$rstData = "$d[2]/$d[1]/$d[0]";
return $rstData;
}else{
return "Data invalida";
}
}
$data = ConverteData($_POST["data"]);
$dataf = ConverteData($_POST["dataf"]);

$query = mysql_query("SELECT * FROM acemaq WHERE data >='$data' AND data <= '$dataf' ORDER BY data ASC");
?>
<!DOCTYPE HTML>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">

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

require_once("db.php");
echo "<center>";
echo "<h1>Acerto Geral por Data</h1>";
echo "<h3>Operador: ".$operador."</h3>";

$query = "SELECT * FROM acemaq WHERE operador ='".$operador."' AND data >='$data' AND data <= '$dataf'  ORDER BY data DESC";
$result = mysql_query($query) or die(mysql_error());
?>

<table id="example" class="display responsive nowrap" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Operador</th>
                <th>Data</th>
                <th>Hora</th>
                <th>Ponto</th>
                <th>Saldo Bruto</th>
                <th>Despesa 1</th>
                <th>R$ </th>
                <th>Despesa 2</th>
                <th>R$ </th>
                <th>Despesa 3</th>
                <th>R$ </th>
                <th>Despesa 4</th>
                <th>R$ </th>
                <th>Repasse Negativo</th>
                <th>R$ </th>
                <th>Saldo Liquido</th>
                <th>Comissao</th>
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
        <td>".$row[10]."</td>
        <td>".$row[11]."</td>
        <td>".$row[12]."</td>
        <td>".$row[13]."</td>
        <td>".$row[14]."</td>
        <td>".$row[15]."</td>
        <td>".$row[16]."</td>
        <td>".$row[17]."</td>
        <td><a href='deleteacerto2.php?id=".$row[0]."'><img src='images/delete.png'></a></td>
        </tr>";
} 
?>
          </tbody>
    </table>
</html>

