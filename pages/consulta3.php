<?php

require_once("includes/db2.php");

$operador = $_GET['operador'];
echo "<center>";
echo "<h1>Cadastro Resultado</h1>";

$query = "SELECT DISTINCT sorteio1 FROM sorteio";
$result2 = mysql_query($query);
$query1 = "SELECT DISTINCT sorteio2 FROM sorteio";
$result3 = mysql_query($query1);
$query2 = "SELECT DISTINCT sorteio3 FROM sorteio";
$result4 = mysql_query($query2);
$query3 = "SELECT DISTINCT sorteio4 FROM sorteio";
$result5 = mysql_query($query3);
$query4 = "SELECT DISTINCT sorteio5 FROM sorteio";
$result6 = mysql_query($query4);
$query5 = "SELECT DISTINCT sorteio6 FROM sorteio";
$result7 = mysql_query($query5);

$options = "";
$options2 = "";
$options3 = "";
$options4 = "";
$options5 = "";
$options6 = "";

$row2 = mysql_fetch_array($result2);
$row3 = mysql_fetch_array($result3);
$row4 = mysql_fetch_array($result4);
$row5 = mysql_fetch_array($result5);
$row6 = mysql_fetch_array($result6);
$row7 = mysql_fetch_array($result7);
?>


<!DOCTYPE HTML>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=ibm866">

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
<form name="form1" method="post" action="resultado.php">
    Nome do Ponto:
        <select name="ponto">
            <option selected="selected "> <?php echo $row2[0];?></option>
                <option><?php echo $row3[0];?></option>
                <option><?php echo $row4[0];?></option>
                <option><?php echo $row5[0];?></option>
                <option><?php echo $row6[0];?></option>
                <option><?php echo $row7[0];?></option>
        </select>
        <div>
Data do Sorteio: <input type="text" name="data" maxlength="10" id="$data" size="10" OnKeyPress="formatar('##/##/##', this)"/>
</div>
      <div>
 1º Premio: <input type="text" name="premio1" id="premio1"/>
 </div>
       <div>
 2º Premio: <input type="text" name="premio2" id="premio2"/>
 </div>
       <div>
 3º Premio: <input type="text" name="premio3" id="premio3"/>
 </div>
       <div>
 4º Premio: <input type="text" name="premio4" id="premio4"/>
 </div>
       <div>
 5º Premio: <input type="text" name="premio5" id="premio5"/>
 </div>
       <div>
 6º Premio: <input type="text" name="premio6" id="premio6"/>
 </div>
 <div>
 7º Premio: <input type="text" name="premio7" id="premio7"/>
 </div>
<input name="btok" type="submit" id="btok" value="Cadastrar">
      
</form>
</body>