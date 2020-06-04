<?php

//session_start();
//if($_SESSION['logado'] != "sim") die("Voce nao esta logado //no sistema");

require_once("db.php");

$operador = $_GET['operador'];
$filtro = $_GET['filtro'];
echo "<center>";
echo "<h1>Leitura</h1>";
echo "<h3>Tablet: ".$filtro."</h3>";

$query = "SELECT * FROM leitura WHERE operador ='".$operador."' ORDER BY ".$filtro." DESC";
$result = mysql_query($query) or die(mysql_error());

echo "<table border='1'>";
echo "<tr><td>Operador</td><td>Data</td><td>Hora</td><td>Ponto</td><td>Maquina</td><td>Entrada</td><td>Saida</td><td>Acumulado</td></tr>";
while($row = mysql_fetch_array($result)) {
	echo "<tr><td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td><td>".$row[3]."</td><td>".$row[4]."</td><td>R$".($row[5] / 100)."</td><td>R$".($row[6] / 100)."</td><td>R$".$row[7]."</td></tr>";
}
echo "</table>";
