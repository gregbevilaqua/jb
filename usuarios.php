<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<body>
<?php
error_reporting(0);
ini_set(“display_errors”, 0 );
session_start();
if($_SESSION['logado'] != "sim") die("Voce nao esta logado no sistema");
//else if($_SESSION['usuario'] != "higames") die("Voce nao tem permissão para acessar essa parte do site");
require_once("db.php");

$query = "SELECT * FROM tablet";
$result = mysql_query($query) or die(mysql_error());

echo "<center>";
echo "<h1>Operadores</h1>";
echo "<h3>Operadores cadastrados</h3>";
echo "<table border='1' cellpadding='4'>";
echo "<tr><th>ID</th><th>Operador</th><th>Ação</th></tr>";
while($row = mysql_fetch_array($result)) {
echo "<tr><td>".$row[0]."</td><td>".$row[1]."</td><td><a href='perfil.php?user=".$row[2]."'><img src='images/edit.png'></a> &nbsp <a href='deluser.php?id=".$row[0]."&user=".$row[2]."'><img src='images/delete.png'></a></td></tr>";
$limite = $row[0];
}
$resu = "SELECT count(id) FROM tablet";
$resu2 = mysql_query($resu) or die(mysql_error());
$row2 =  mysql_fetch_array($resu2);
$limite3 = $row2[0];
$query2 = "SELECT * FROM licenca";
$result2 = mysql_query($query2) or die(mysql_error());
while($row = mysql_fetch_array($result2)) {
$limite2 = $row[0];
}
if ($limite2 > $limite3)
{
echo "</table>";
echo "<input type='button' value='Novo Operador' onClick=javascript:window.location.href='novousuario.php'>";
echo "</center>";
}
?>

</body>
</html>
