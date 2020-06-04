<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php


require_once("includes/db2.php");

$operador = $_GET['operador'];

$query = "SELECT * FROM tablet WHERE idprod = '".$idprod."'";
$result = mysql_query($query) or die(mysql_error());
$row = mysql_fetch_array($result);

echo "<center>";
echo "<h1>Editar cadastro</h1>";
echo "<h3>".$row[2]."</h3>";
echo "<table border ='0'>";
echo "<form name='perfil' action='editperfil.php'>";
echo "<tr><td>Nome de exibição</td><td><input type='text' name='nome' value='".$row[1]."' autocomplete='off'></td><tr>";
echo "<tr><td>Alterar senha</td><td><input type='button' name='alter' value='Alterar senha' onClick=javascript:window.location.href='alter.php?user=".$user."'></td><tr>";
echo "<tr><td>comissao</td><td><input type='number' name='comissao' value='".$row[5]."'></td><tr>";
echo "<tr><td><input type='hidden' name='user' value='".$user."'></td><td><input type='submit' value='Salvar'><input type='button' value='Cancelar' onClick=javascript:window.location.href='home.php'></td><tr>";

?>
