<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<body>
<center>
<?php
require_once("includes/db2.php");

$operador = $_GET['operador'];

$query = "SELECT DISTINCT ponto FROM ponto WHERE operador ='".$operador."'";
$result2 = mysql_query($query);

$options = "";


while($row2 = mysql_fetch_array($result2))
{
    $options = $options."<option>$row2[0]</option>";
}

echo "<h3>Cadastro de Maquina: Operador = ".$operador."</h3>";
?>
<!DOCTYPE HTML>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=euc-jp">

<meta name="viewport" content="width=device-width"/>
<title>Sistema de Leitura FCM Vs1.00</title>
<link href="jquery.dataTables.min.css" rel="stylesheet" type="text/css">
<link href="responsive.dataTables.min.css" rel="stylesheet" type="text/css">
<script src="jquery-1.12.4.js"></script>
<script src="jquery.dataTables.min.js"></script>
<script src="dataTables.responsive.min.js"></script>
</head>
<script>
function formatar(mascara, documento){
var i = documento.value.length;
var saida = mascara.substring(0,1);
var texto = mascara.substring(i)

if (texto.substring(0,1) != saida){
documento.value += texto.substring(0,1);
}

}
</script>
<body>
<form name="form1" method="post" action="index.php?page=newuser3&operador=<?php echo $operador; ?>">
    Nome do Ponto:
        <select name="ponto">
          <?php echo $options;?>
        </select>
<br>Maquina: <input type="text" name="maquina" maxlength="10" id="$maquina" size="20"/></br>
<br>Entrada: <input type="number" name="entrada" maxlength="10" id="$entrada" size="20"/><br>
<br>Saida: <input type="number" name="saida" maxlength="10" id="$saida" size="20"/></br>
<br>Moeda:         
        <select name="moeda">
          <option value="0.01" selected>0.01</option>
          <option value="0.05">0.05</option>
          <option value="0.10">0.10</option>
          <option value="0.25">0.25</option>
          <option value="0.50">0.50</option>
          <option value="1.00">1.00</option>
        </select></br>
<br>Comissao: <input type="number" name="comissao" maxlength="10" id="$comissao" size="20"/></br>
<input name="btok" type="submit" id="btok" value="OK">

</form>
</body>

</html>
