<?php

require_once("includes/db2.php");


echo "<center>";
echo "<h1>Cadastro de Cotações</h1>";

?>
<?php
//Include Functions
include('includes/Functions.php');

//Include Notifications
include ('includes/notification.php');

$query = "SELECT * FROM sorteio";
$result = mysql_query($query) or die(mysql_error());
$row = mysql_fetch_array($result);

?>

<!DOCTYPE HTML>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=euc-jp">

<meta name="viewport" content="width=device-width"/>
<title>Pará Estrela</title>
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
<form name="form1" method="post" action="sorteiofim.php">
    <div>
        Sorteio: <input type="text" name="sorteio1" id="sorteio1" value="<?php echo $row[1];; ?>"/>
Hora: <input type="text" name="data1" maxlength="5" id="$data1" size="10" value="<?php echo $row[7];; ?>" OnKeyPress="formatar('##:##', this)"/>
</div>
    <div>
        Sorteio: <input type="text" name="sorteio2" id="sorteio2" value="<?php echo $row[2];; ?>"/>
Hora: <input type="text" name="data2" maxlength="5" id="$data2" size="10" value="<?php echo $row[8];; ?>" OnKeyPress="formatar('##:##', this)"/>
</div>
    <div>
        Sorteio: <input type="text" name="sorteio3" id="sorteio3" value="<?php echo $row[3];; ?>"/>
Hora: <input type="text" name="data3" maxlength="5" id="$data3" size="10" value="<?php echo $row[9];; ?>" OnKeyPress="formatar('##:##', this)"/>
</div>
    <div>
        Sorteio: <input type="text" name="sorteio4" id="sorteio4" value="<?php echo $row[4];; ?>"/>
Hora: <input type="text" name="data4" maxlength="5" id="$data4" size="10" value="<?php echo $row[10];; ?>" OnKeyPress="formatar('##:##', this)"/>
</div>
    <div>
        Sorteio: <input type="text" name="sorteio5" id="sorteio5" value="<?php echo $row[5];; ?>"/>
Hora: <input type="text" name="data5" maxlength="5" id="$data5" size="10" value="<?php echo $row[11];; ?>" OnKeyPress="formatar('##:##', this)"/>
</div>
    <div>
        Sorteio: <input type="text" name="sorteio6" id="sorteio6" value="<?php echo $row[6];; ?>"/>
Hora: <input type="text" name="data6" maxlength="5" id="$data6" size="10" value="<?php echo $row[12];; ?>"  OnKeyPress="formatar('##:##', this)"/>
</div>
<input name="btok" type="submit" id="btok" value="Confirmar">

</form>
</body>