<?php

require_once("includes/db2.php");

$operador = $_GET['operador'];
echo "<center>";
echo "<h1>Relatorio Gerente</h1>";
echo "<h1>Por Data</h1>";
$query = "SELECT DISTINCT gerente FROM gerente";
$result2 = mysql_query($query);

$options = "";

while($row2 = mysql_fetch_array($result2))
{
    $options = $options."<option>$row2[0]</option>";
}

?>

<!DOCTYPE HTML>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=euc-jp">

<meta name="viewport" content="width=device-width"/>
<title>Relatorio Gerente</title>
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
<form name="form1" method="post" action="index.php?page=listagerente">
     Nome do Gerente:
        <select name="ponto">
          <?php echo $options;?>
        </select>
Inicio: <input type="text" name="data" maxlength="10" id="$data" size="10" OnKeyPress="formatar('##/##/##', this)"/>
Fim: <input type="text" name="dataf" maxlength="10" id="$dataf" size="10" OnKeyPress="formatar('##/##/##', this)"/>
<input name="btok" type="submit" id="btok" value="OK">

</form>
</body>
</html>



