<?php

require_once("../includes/db2.php");

$operador = $_GET['operador'];
echo "<center>";
echo "<h1>Acerto Geral por Data</h1>";
echo "<h3>Operador: ".$operador."</h3>";
?>


<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width"/>
<title>Sistema de Leitura FCM Vs1.00</title>
<link href="../css/jquery.dataTables.min.css" rel="stylesheet" type="text/css">
<link href="../css/responsive.dataTables.min.css" rel="stylesheet" type="text/css">
<script src="../js/jquery-1.12.4.js"></script>
<script src="../js/jquery.dataTables.min.js"></script>
<script src="../js/dataTables.responsive.min.js"></script>
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
<form name="form1" method="post" action="listaconsulta.php?operador=<?php echo $operador; ?>">

Inicio: <input type="text" name="data" maxlength="10" id="$data" size="10" OnKeyPress="formatar('##/##/##', this)"/>
Fim: <input type="text" name="dataf" maxlength="10" id="$dataf" size="10" OnKeyPress="formatar('##/##/##', this)"/>
<input name="btok" type="submit" id="btok" value="OK">

</form>
</body>