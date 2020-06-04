<?php
include('includes/Functions.php');

//Include Notifications
include ('includes/notification.php');
require_once("includes/db2.php");
$operador = $_GET['operador'];
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

$query = mysql_query("SELECT * FROM acemaq WHERE data >='$data' AND data <= '$dataf' ORDER BY data ASC");
?>
<!DOCTYPE HTML>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=euc-jp">

<meta name="viewport" content="width=device-width"/>
<title>Sistema de Leitura FCM Vs1.00</title>

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

$query = "SELECT * FROM acemaq WHERE operador ='".$operador."' AND data >='$data' AND data <= '$dataf'  ORDER BY data DESC";
$result = mysql_query($query) or die(mysql_error());
include ('includes/global.php');
?>

        <div id="divConteudo">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"><?php echo "<h1>Leitura</h1>";
                    echo "<h3>Operador: ".$operador."</h3>";?></h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
<body>

            <div class="row">
                <div class="col-lg-12">
        <div class="table-responsive">
            <table class="table table-bordered table-hover table-striped" id= "tabela">   
        <thead>
            <tr>
                <th>Operador</th>
                <th>Data</th>
                <th>Hora</th>
                <th>Ponto</th>
                <th>Saldo Bruto</th>
                <th>Despesa 1</th>
                <th>R$ </th>
                <th>Despesa 2</th>
                <th>R$ </th>
                <th>Despesa 3</th>
                <th>R$ </th>
                <th>Despesa 4</th>
                <th>R$ </th>
                <th>Despesa 5</th>
                <th>R$ </th>
                <th>Saldo</th>
                <th>Comissao</th>
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
        <td>".$row[7]."</td>
        <td>".$row[8]."</td>
        <td>".$row[9]."</td>
        <td>".$row[10]."</td>
        <td>".$row[11]."</td>
        <td>".$row[12]."</td>
        <td>".$row[13]."</td>
        <td>".$row[14]."</td>
        <td>".$row[15]."</td>
        <td>".$row[16]."</td>
        <td>".$row[17]."</td>
        <td><a href='deleteacerto2.php?id=".$row[0]."'><img src='images/delete.png'></a></td>
        </tr>";
} 
?>
         </tbody>
    </table>
       </div>
       </div>
       </div>
    </body>
    
    <?php
require_once("includes/db2.php");
$query2 = "SELECT comissao as COMI, administracao as ADMIN, parceria as PARC FROM tablet WHERE idprod='".$operador."' ";
$result2 = mysql_query($query2) or die(mysql_error());
$query_valor = "SELECT SUM(saldo)as SOMA, SUM(SALDOBRUTO)as BRUTO, SUM(vdespesa1)as D1, SUM(vdespesa2)as D2, SUM(vdespesa3)as D3, SUM(vdespesa4)as D4, SUM(vdespesa5)as D5, SUM(comissao)as C1 FROM acemaq WHERE operador ='".$operador."' AND data >='$data' AND data <= '$dataf' ORDER BY data DESC";
$result_valor = mysql_query($query_valor);
while ($rows = mysql_fetch_assoc($result_valor)) {
$saldobruto = $rows["BRUTO"];
$sald = $rows["SOMA"];
$d1 = $rows["D1"];
$d2 = $rows["D2"];
$d3 = $rows["D3"];
$d4 = $rows["D4"];
$d5 = $rows["D5"];
$c1 = $rows["C1"];
}
while ($row2 = mysql_fetch_assoc($result2)) {
$comii = $row2["COMI"];
$adminn = $row2["ADMIN"];
$parcc = $row2["PARC"];
}
$somasaldo = ($saldobruto + $c1);
$desp2 = ($d1);
$descodesp = ($somasaldo - $desp2);
$comidesc = ($c1 / $somasaldo * 100);
$descomi = ($comidesc * $descodesp / 100);
$subtotal = ($descodesp - $descomi);
$comiiii = ($comii * $subtotal / 100);
$subtotalbr = ($subtotal - $comiiii);
$calcadmin = ($adminn * $subtotalbr / 100);
$subtotaladm = ($subtotalbr - $calcadmin);
$despes = ($d2 + $d3 + $d4 + $d5);
$totalbruto = ($subtotaladm - $despes - $descomi);
$saldobe = ($subtotal - $comiiii - $calcadmin - $despes);
$parcer = ($parcc * $saldobe / 100);
$saldofinal = ($saldobe - $parcer); 
?>
<link rel="stylesheet" type="text/css" href="css/estilo.css"/>
       <body>
               <div class="row">
                <div class="col-lg-12">
        <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped"> 
            <thead>
                <tr>
                    <th>Saldo Bruto Ponto</th>
                    <td><?php echo "<h3>R$: ".number_format($somasaldo, 2, '.', ',')."</h3>";?></td>
                </tr>
                 <tr>
                <th>Despesa Bruto Ponto</th>
                    <td><?php echo "<h3>R$: ".number_format($desp2, 2, '.', ',')."</h3>";?></td>
                </tr>
                <tr>
                    <th>Comissão Total do Ponto</th>
                    <td><?php echo "<h3>R$: ".number_format($descomi, 2, '.', ',')."</h3>";?></td>
                </tr>    
                <tr>
                    <th>SubTotal do Ponto</th>
                    <td><?php echo "<h3>R$: ".number_format($subtotal, 2, '.', ',')."</h3>";?></td>
                </tr>
                                            <tr>
                    <th>Comissao Operador</th>
                    <td><?php echo "<h3>R$: ".number_format($comiiii, 2, '.', ',')."</h3>";?></td>
                </tr>
                    <tr>
                    <th>Administracao</th>
                    <td><?php echo "<h3>R$: ".number_format($calcadmin, 2, '.', ',')."</h3>";?></td>
                </tr>
                <tr>
                    <th>Total Despesas Ponto</th>
                    <td><?php echo "<h3>R$: ".number_format($despes, 2, '.', ',')."</h3>";?></td>
                </tr>
                <tr>
                    <th>Saldo Bruto Empresa</th>
                    <td><?php echo "<h3>R$: ".number_format($saldobe, 2, '.', ',')."</h3>";?></td> 
                </tr>
                                <tr>
                    <th>Comissao Parceria</th>
                    <td><?php echo "<h3>R$: ".number_format($parcer, 2, '.', ',')."</h3>";?></td> 
                </tr>
                <tr>
                    <th>Liquido % Empresa a Receber</th>
                    <td><?php echo "<h3>R$: ".number_format($saldofinal, 2, '.', ',')."</h3>";?></td>
                </tr>
            </thead>
            
        </table>
    </div>
        </div>
            </div>
</body>
</html>


