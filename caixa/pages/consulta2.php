<?php

require_once("includes/db2.php");

$operador = $_GET['operador'];
$gerente = $_GET['gerente'];
echo "<center>";
echo "<h1>Consulta Leitura </h1>";
echo "<h1>Por Sorteio</h1>";
echo "<h3>Cambista: ".$operador."</h3>";
$query = "SELECT sorteio1 FROM sorteio";
$result2 = mysql_query($query);
$query3 = "SELECT sorteio2 FROM sorteio";
$result3 = mysql_query($query3);
$query4 = "SELECT sorteio3 FROM sorteio";
$result4 = mysql_query($query4);
$query5 = "SELECT sorteio4 FROM sorteio";
$result5 = mysql_query($query5);
$query6 = "SELECT sorteio5 FROM sorteio";
$result6 = mysql_query($query6);
$query7 = "SELECT sorteio6 FROM sorteio";
$result7 = mysql_query($query7);

$row2 = mysql_fetch_array($result2);
$row3 = mysql_fetch_array($result3);
$row4 = mysql_fetch_array($result4);
$row5 = mysql_fetch_array($result5);
$row6 = mysql_fetch_array($result6);
$row7 = mysql_fetch_array($result7);
$options = $options."<option>$row2[0]</option>";
$options2 = $options2."<option>$row3[0]</option>";
$options3 = $options3."<option>$row4[0]</option>";
$options4 = $options4."<option>$row5[0]</option>";
$options5 = $options5."<option>$row6[0]</option>";
$options6 = $options6."<option>$row7[0]</option>";



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
<form name="form1" method="post" action="index.php?page=listaconsult4&operador=<?php echo $operador; ?>&gerente=<?php echo $gerente; ?>">
     Nome do Ponto:
        <select name="ponto">
          <?php echo $options;?>
          <?php echo $options2;?>
          <?php echo $options3;?>
          <?php echo $options4;?>
          <?php echo $options5;?>
          <?php echo $options6;?>
        </select>
Inicio: <input type="text" name="data" maxlength="10" id="$data" size="10" OnKeyPress="formatar('##/##/##', this)"/>
Fim: <input type="text" name="dataf" maxlength="10" id="$dataf" size="10" OnKeyPress="formatar('##/##/##', this)"/>
<input name="btok" type="submit" id="btok" value="OK">

</form>
</body>
</html>



