<?php
include('includes/Functions.php');

//Include Notifications
include ('includes/notification.php');
require_once("includes/db2.php");
$operador = $_GET['operador'];
$ponto = $_POST['ponto'];
function ConverteData($Data){
if (strstr($Data, "/"))//verifica se tem a barra /
{
$d = explode ("/", $Data);//tira a barra
$rstData = "$d[0]/$d[1]/$d[2]";//separa as datas $d[2] = ano $d[1] = mes etc...
return $rstData;
} elseif(strstr($Data, "-")){
$d = explode ("-", $Data);
$rstData = "$d[2]/$d[1]/$d[0]";
return $rstData;
}else{
return "Data invalida";
}
}
$data = ConverteData($_POST["data"]);
$dataf = ConverteData($_POST["dataf"]);

$query = mysql_query("SELECT * FROM pagamento WHERE data >='$data' AND data <= '$dataf' ORDER BY data ASC");
?>
<!DOCTYPE HTML>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">

<meta name="viewport" content="width=device-width"/>
<title>Sistema de Leitura FCM Vs1.00</title>
<link href="jquery.dataTables.min.css" rel="stylesheet" type="text/css">
<link href="responsive.dataTables.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="css/estilo.css"/>
<script src="jquery-1.12.4.js"></script>
<script src="jquery.dataTables.min.js"></script>
<script src="dataTables.responsive.min.js"></script>
</head>
<script>
$(document).ready(function() {
    $('#example').DataTable();
} );
</script>
<?php
require_once("includes/db2.php");
echo "<center>";

$query = "SELECT * FROM sangria WHERE operador ='".$operador."' AND ponto = '$ponto' AND data >='$data' AND data <= '$dataf'  ORDER BY data DESC";
$result = mysql_query($query) or die(mysql_error());
include ('includes/global.php');
?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"><?php echo "<h1>Sangrias Enviadas Online</h1>";
                    echo "<h3>Operador: ".$operador."</h3>";?></h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
<body>

    <div id="divConteudo">
        <table class="table table-bordered table-hover table-striped" id="tabela">    
        <thead>
            <tr>
                <th>Operador</th>
                <th>Data</th>
                <th>Hora</th>
                <th>Ponto</th>
                <th>Maquina</th>
                <th>Sangria</th>
                <th>Apagar</th>

            </tr>
        </thead>
        <tbody>
<?
while($row = mysql_fetch_array($result)) {
	echo "<tr>
        <td>".$row[1]."</td>
        <td>".$row[2]."</td>
        <td>".$row[3]."</td>
        <td>".$row[4]."</td>
        <td>".$row[5]."</td>
        <td>".$row[6]."</td>
        <td><a href='deleteacerto4.php?id=".$row[0]."'><img src='images/delete.png'></a></td>
        </tr>";
} 
?>
         </tbody>
    </table>
       </div>
    </body>
    
    <?php
require_once("includes/db2.php");
$query_valor = "SELECT SUM(sangria)as SOMA FROM sangria WHERE operador ='".$operador."' AND ponto = '$ponto' AND data >='$data' AND data <= '$dataf' ORDER BY data DESC";
$result_valor = mysql_query($query_valor);
while ($rows = mysql_fetch_assoc($result_valor)) {
$sald = $rows["SOMA"];
}

?>
<link rel="stylesheet" type="text/css" href="css/estilo.css"/>
       <body>
    <div id="divConteudo1">
        <table class="table table-bordered table-hover table-striped" id="tabela2"> 
            <thead>
                <tr>
                    <th>Total de Sangria enviadas</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo "<h3>R$: ".number_format($sald, 2, '.', ',')."</h3>";?></td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>


