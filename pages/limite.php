<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<body>
<center>
<h1>Limite de Aposta</h1>
<?php


require_once("includes/db2.php");

$operador = $_GET['operador'];

$query = "SELECT * FROM limitecredito";
$result = mysql_query($query) or die(mysql_error());
$row = mysql_fetch_array($result);

echo "<h3>Limite de Aposta</h3>";
echo "<table border = '0'>";
echo "<form name='newlimite' action='newlimite.php' onsubmit='return val()'>";
echo "<tr><td>Milhar 1,00 x</td><td><input type='number' name='milhar' id='milhar' value='".$row[1]."' autocomplete='off'></td></tr>";
echo "<tr><td>MC 1,00 x</td><td><input type='number' name='mc' id='mc' value='".$row[2]."' autocomplete='off'></td></tr>";
echo "<tr><td>Milhar Invertida 1,00 x</td><td><input type='number' name='mi' id='mi' value='".$row[3]."'autocomplete='off'></td></tr>";
echo "<tr><td>Centena 1,00 x</td><td><input type='number' name='centena' id='centena' value='".$row[4]."'autocomplete='off'></td></tr>";
echo "<tr><td>Centena Invertida 1,00 x</td><td><input type='number' name='ci' id='ci' value='".$row[5]."' autocomplete='off'></td></tr>";
echo "<tr><td>Dezena 1,00 x</td><td><input type='number' name='dezena' id='dezena' value='".$row[6]."' autocomplete='off'></td></tr>";
echo "<tr><td>Duque de Dezena 1,00 x</td><td><input type='number' name='duquedeze' id='duquedeze' value='".$row[7]."' autocomplete='off'></td></tr>";
echo "<tr><td>Terno de Dezena 1,00 x</td><td><input type='number' name='ternodeze' id='ternodeze' value='".$row[8]."' autocomplete='off'></td></tr>";
echo "<tr><td>Grupo 1,00 x</td><td><input type='number' name='grupo' id='grupo' value='".$row[9]."' autocomplete='off'></td></tr>";
echo "<tr><td>Duque de Grupo 1,00 x</td><td><input type='number' name='duquegp' id='duquegp' value='".$row[10]."' autocomplete='off'></td></tr>";
echo "<tr><td>Terno de Grupo 1,00 x</td><td><input type='number' name='ternogp' id='ternogp' value='".$row[11]."' autocomplete='off'></td></tr>";
echo "<tr><td>PasseVai 1,00 x</td><td><input type='number' name='passevai' id='passevai' value='".$row[12]."' autocomplete='off'></td></tr>";
echo "<tr><td></td><td><input type='submit' value='Atualizar'><input type='button' value='Cancelar'></td></tr>";
echo "</form>";
echo "</table>";


?>
<script>
	function val() {
		var idcambista = document.getElementById('idcambista');
		var nome = document.getElementById('nome');
		var comissao = document.getElementById('comissao');
		var administracao = document.getElementById('administracao');
		var parceria = document.getElementById('parceria');
		var semana = document.getElementById('semana');

		var errormsg = 'Erro:';
		var errorcount = 0;

		if(idcambista.value == '' || idcambista.value == null) {
			errormsg += '\nO Id do Cambista não pode ficar em branco!';
			errorcount ++;
		}

		if(nome.value == '' || nome.value == null) {
			errormsg += '\nO nome de exibição não pode ficar em branco!';
			errorcount ++;
		}
	if(comissao.value == '' || comissao.value == null) {
			errormsg += '\nA Comissao não pode ficar em branco, caso n�o exista coloque valor zero!';
			errorcount ++;
		}
	if(administracao.value == '' || administracao.value == null) {
			errormsg += '\nA Administração não pode ficar em branco, caso n�o exista coloque valor zero!';
			errorcount ++;
		}
	if(parceria.value == '' || parceria.value == null) {
			errormsg += '\nA Parceria não pode ficar em branco, caso n�o exista coloque valor zero!';
			errorcount ++;
		}
			if(semana.value == '' || semana.value == null) {
			errormsg += '\nA Semana não pode ficar em branco, caso n�o exista coloque valor zero!';
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
