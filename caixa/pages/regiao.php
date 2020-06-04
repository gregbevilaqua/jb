<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<body>
<center>
<h1>Nova Região</h1>
<?php
require_once("includes/db2.php");

$resu = "SELECT count(id) FROM tablet";
$resu2 = mysql_query($resu) or die(mysql_error());
$row2 =  mysql_fetch_array($resu2);
$limite3 = $row2[0];
$query2 = "SELECT valor FROM licenca";
$result2 = mysql_query($query2) or die(mysql_error());
while($row = mysql_fetch_array($result2)) {
$limite2 = $row[0];
}
if ($limite2 > $limite3)
{
echo "<h3>Cadastro Região</h3>";
echo "<table border = '0'>";
echo "<form name='newuser' action='newregiao.php' onsubmit='return val()'>";
echo "<tr><td>Região</td><td><input type='text' name='regiao' id='regiao' autocomplete='off'></td></tr>";
echo "<tr><td>Numero Identificação</td><td><input type='text' name='codregiao' id='codregiao' autocomplete='off'></td></tr>";
echo "<tr><td></td><td><input type='submit' value='Cadastrar'><input type='button' value='Cancelar'></td></tr>";
echo "</form>";
echo "</table>";
}
if ($limite2 <= $limite3)
{
echo "<h3>Limite de Operador Excedido!!!</h3>";
}
?>
<script>
	function val() {
		var idcambista = document.getElementById('regiao');
		var nome = document.getElementById('codregiao');
		var errormsg = 'Erro:';
		var errorcount = 0;

		if(idcambista.value == '' || idcambista.value == null) {
			errormsg += '\nO Região não pode ficar em branco!';
			errorcount ++;
		}

		if(nome.value == '' || nome.value == null) {
			errormsg += '\nO Código Região não pode ficar em branco!';
			errorcount ++;
		}

		if(errorcount > 0) {
			 alert(errormsg);
			return false;
		}
	}
</script>

</body>
</html>
