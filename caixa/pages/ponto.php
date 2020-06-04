<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<body>
<center>
<?php
require_once("includes/db2.php");

$operador = $_GET['operador'];

echo "<h3>Cadastro de Ponto - Operador: ".$operador."</h3>";
echo "<table border = '0'>";
echo "<form name='newuser2' action='newuser2.php' onsubmit='return val()'>";
echo "<tr><td>Ponto</td><td><input type='text' name='ponto' id='ponto' autocomplete='off'></td></tr>";
echo "<tr><td>Comissao Operador</td><td><input type='number' name='comissaoop' id='comissaoop' autocomplete='off'></td></tr>";
echo "<tr><td><input type='hidden' name='operador' value='$operador'></td><td>";
echo "<tr><td></td><td><input type='submit' value='Cadastrar'><input type='button' value='Cancelar'></td></tr>";
echo "</form>";
echo "</table>";


?>
<script>
	function val() {
		var ponto = document.getElementById('ponto');
		var comissaoop = document.getElementById('comissaoop');


		var errormsg = 'Erro:';
		var errorcount = 0;

		if(ponto.value == '' || ponto.value == null) {
			errormsg += '\nO não pode ficar em branco!';
			errorcount ++;
		}

		if(comissaoop.value == '' || maquina.value == null) {
			errormsg += '\nO Comissao não pode ficar em branco, caso n�o exista coloque valor zero!';
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
