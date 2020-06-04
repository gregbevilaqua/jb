<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php


require_once("includes/db2.php");

$operador = $_GET['operador'];

$query = "SELECT * FROM cambista WHERE nome = '$operador'";
$result = mysql_query($query) or die(mysql_error());
$row = mysql_fetch_array($result);

echo "<center>";
echo "<h1>Editar Cambista</h1>";
echo "<h3>".$row[2]."</h3>";
echo "<table border ='0'>";
echo "<form name='perfil' action='editperfil.php'>";
echo "<tr><td>Id Cambista</td><td><input type='text' name='idcambista' value='".$row[1]."' autocomplete='off'></td><tr>";
echo "<tr><td><input type='hidden' name='nome' value='$operador'></td><td><input type='submit' value='Salvar'><input type='button' value='Cancelar' onClick=javascript:window.location.href='home.php'></td><tr>";
echo "<tr><td>Nome Cambista</td><td><input type='text' name='nome' value='".$row[2]."' autocomplete='off'></td><tr>";
echo "<tr><td><input type='hidden' name='nome' value='$operador'></td><td><input type='submit' value='Salvar'><input type='button' value='Cancelar' onClick=javascript:window.location.href='home.php'></td><tr>";
echo "<tr><td>comissao</td><td><input type='number' name='comissao' value='".$row[3]."'></td><tr>";
echo "<tr><td><input type='hidden' name='nome' value='$operador'></td><td><input type='submit' value='Salvar'><input type='button' value='Cancelar' onClick=javascript:window.location.href='home.php'></td><tr>";
echo "<tr><td>Comissão Gerente</td><td><input type='number' name='administracao' value='".$row[4]."'></td><tr>";
echo "<tr><td><input type='hidden' name='nome' value='$operador'></td><td><input type='submit' value='Salvar'><input type='button' value='Cancelar' onClick=javascript:window.location.href='home.php'></td><tr>";

echo "<tr><td>Comissão Parceria</td><td><input type='number' name='parceria' value='".$row[5]."'></td><tr>";
echo "<tr><td><input type='hidden' name='nome' value='$operador'></td><td><input type='submit' value='Salvar'><input type='button' value='Cancelar' onClick=javascript:window.location.href='home.php'></td><tr>";
?>
