<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php


require_once("includes/db2.php");

$id = addslashes($_GET['id']);

$query = "SELECT * FROM maquina WHERE id = '$id'";
$result = mysql_query($query) or die(mysql_error());
$row = mysql_fetch_array($result);

echo "<center>";
echo "<h1>Editar Maquinas</h1>";
echo "<h3>".$row[2]."</h3>";
echo "<table border ='0'>";
echo "<form name='perfil' action='editmaquina.php'>";
echo "<tr><td>Operador</td><td><input type='text' name='operador' value='".$row[1]."' autocomplete='off'></td><tr>";
echo "<tr><td>Ponto</td><td><input type='text' name='ponto' value='".$row[2]."' autocomplete='off'></td><tr>";
echo "<tr><td>Comissao Operador</td><td><input type='number' name='comissaoop' value='".$row[3]."' autocomplete='off'></td><tr>";
echo "<tr><td>Maquina</td><td><input type='text' name='maquina' value='".$row[4]."' autocomplete='off'></td><tr>";
echo "<tr><td>Entrada</td><td><input type='number' name='entrada' value='".$row[5]."' autocomplete='off'></td><tr>";
echo "<tr><td>Saida</td><td><input type='number' name='saida' value='".$row[6]."' autocomplete='off'></td><tr>";
echo "<tr><td>Moeda</td><td><input type='text' name='moeda' value='".$row[7]."' autocomplete='off'></td><tr>";
echo "<tr><td>Comissao Maquina</td><td><input type='number' name='comissao' value='".$row[8]."' autocomplete='off'></td><tr>";
echo "<tr><td><input type='hidden' name='id' value='$id'></td><td><input type='submit' value='Salvar'><input type='button' value='Cancelar' onClick=javascript:window.location.href='home.php'></td><tr>";
?>
