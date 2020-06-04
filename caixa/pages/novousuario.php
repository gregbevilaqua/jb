<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<body>
<center>
<h1>Novo Cambista</h1>
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

$query4 = "SELECT DISTINCT gerente FROM gerente";
$result4 = mysql_query($query4);

$query5 = "SELECT DISTINCT regiao FROM regiao";
$result5 = mysql_query($query5);

$options = "";
$options2 = "";

while($row4 = mysql_fetch_array($result4))
{
    $options = $options."<option>$row4[0]</option>";
}
while($row5 = mysql_fetch_array($result5))
{
    $options2 = $options2."<option>$row5[0]</option>";
}

if ($limite2 > $limite3)
{
echo "<h3>Liberação Cambista</h3>";
echo "<table border = '0'>";
echo "<form name='newuser' action='newuser.php' onsubmit='return val()'>";
echo "<tr><td>Id Equipamento</td><td><input type='text' name='idcambista' id='idcambista' autocomplete='off'></td></tr>";
echo "<tr><td>Nome Cambista</td><td><input type='text' name='nome' id='nome' autocomplete='off'></td></tr>";
echo "<tr><td>Comissao</td><td><input type='number' name='comissao' id='comissao'></td></tr>"; ?>
<tr><td>Gerente:</td><td>
       <select name="gerente">
          <?php echo $options;?>
        </select></td></tr>
<?php
echo "<tr><td>Comissão Gerente Dia:</td><td><input type='number' name='administracao' id='administracao'></td></tr>";?>
<?php
echo "<tr><td>Comissão Gerente Semana:</td><td><input type='number' name='semana' id='semana'></td></tr>";?>
<tr><td>Região:</td><td>
       <select name="regiao">
          <?php echo $options2;?>
        </select></td></tr>
<?php
echo "<tr><td>Comissão Região:</td><td><input type='number' name='parceria' id='parceria'></td></tr>";
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
