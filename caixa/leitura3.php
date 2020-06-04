<?php

session_start();
if($_SESSION['logado'] != "sim") die("Voce nao esta logado //no sistema");

require_once("db.php");

$operador = $_GET['operador'];
echo "<center>";
echo "<h1>Leitura</h1>";
echo "<h3>Tablet: ".$operador."</h3>";

$query = "SELECT * FROM leitura2 WHERE operador ='".$operador."' ORDER BY data DESC";
$result = mysql_query($query) or die(mysql_error());
?>
<?php
//echo "<table border='0' >";
//echo "<tr><td>Exibir por:</td><td><select name='status'><option value='todos'>Todos</option><option value='ponto'>Ponto</option><option value='maquina'>Maquina</option></select></td></tr>";
//echo "<input type='hidden' name='idprod' value='".$row[1]."'>";
//echo "<tr><td></td><td><input type='submit' value='Salvar'><input type='button' value='Cancelar' onClick='javascript:history.back(1)' ></td></tr>";
//echo "</table>";
echo "<table border='1' bordercolor='red'>";
echo "<tr><td>Operador</td><td>Data</td><td>Hora</td><td>Ponto</td><td>Maquina</td><td>Entrada Anterior</td><td>Saida Anterior</td><td>Entrada Atual</td><td>Saida Atual</td><td>Entrada R$</td><td>Saida R$</td><td>Comissao</td><td>Saldo</td></tr>";
while($row = mysql_fetch_array($result)) {
	echo "<tr>
        <td>Operador:".($row[0])."</td>
        <td>".$row[1]."</td>
        <td>".$row[2]."</td>
        <td>".$row[3]."</td>
        <td>".$row[4]."</td>
        <td>".$row[5]."</td>
        <td>".$row[6]."</td>
        <td>".$row[7]."</td>
        <td>".$row[8]."</td>
        <td>R$".($row[9])."</td>
        <td>R$".($row[10])."</td>
        <td>R$".($row[11])."</td>
        <td>R$".($row[12])."</td>
        </tr>";
}
echo "</table>";
?>
