<?php

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

$query = mysql_query("SELECT * FROM milhar WHERE data >='$data' AND data <= '$dataf' ORDER BY data ASC");
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
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
//Include Functions
include('includes/Functions.php');

//Include Notifications
include ('includes/notification.php');
require_once("includes/db2.php");
//Milhar
$query = "SELECT * FROM milhar WHERE nome ='".$operador."' AND data >='$data' AND data <= '$dataf'  ORDER BY data DESC";
$result = mysql_query($query) or die(mysql_error());
//centena
$query2 = "SELECT * FROM centena WHERE nome ='".$operador."' AND data >='$data' AND data <= '$dataf'  ORDER BY data DESC";
$result2 = mysql_query($query2) or die(mysql_error());
include ('includes/global.php');
?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"><?php echo "<h1>Leitura</h1>";
                    echo "<h3>Cambista: ".$operador."</h3>";?></h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
<body>

    <div id="divConteudo">
        <table class="table table-bordered table-hover table-striped" id="tabela">    
        <thead>
            <tr>
         <th>Nome</th>
<th>Ticket</th>
<th>Sorteio</th>
<th>Data</th>
<th>Hora</th>
<th>Jogo</th>
<th>Cercado</th>
<th>Quantidade</th>
<th>Valor Apostado</th>
<th>Valor Total</th>
<th>numero1</th>
<th>numero2</th>
<th>numero3</th>
<th>numero4</th>
<th>numero5</th>
<th>numero6</th>
<th>numero7</th>
<th>numero8</th>
<th>numero9</th>
<th>numero10</th>
<th>numero11</th>
<th>numero12</th>
<th>numero13</th>
<th>numero14</th>
<th>numero15</th>
<th>numero16</th>
<th>numero17</th>
<th>numero18</th>
<th>numero19</th>
<th>numero20</th>
<th>numero21</th>
<th>numero22</th>
<th>numero23</th>
<th>numero24</th>
<th>numero25</th>
<th>numero26</th>
<th>numero27</th>
<th>numero28</th>
<th>numero29</th>
<th>numero30</th>
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
        <td>R$".($row[10])."</td>
        <td>R$".($row[11])."</td>
        <td>R$".($row[12])."</td>
        <td>R$".($row[13])."</td>
        <td>R$".($row[14])."</td>
        <td>R$".($row[15])."</td>
        <td>R$".($row[16])."</td>
        <td>R$".($row[17])."</td>
        <td>R$".($row[18])."</td>
        <td>R$".($row[19])."</td>
        <td>R$".($row[20])."</td>
        <td>R$".($row[21])."</td>
        <td>R$".($row[22])."</td>
        <td>R$".($row[23])."</td>
        <td>R$".($row[24])."</td>
        <td>R$".($row[25])."</td>
        <td>R$".($row[26])."</td>
        <td>R$".($row[27])."</td>
        <td>R$".($row[28])."</td>
        <td>R$".($row[29])."</td>
        <td>R$".($row[30])."</td>
        <td>R$".($row[31])."</td>
        <td>R$".($row[32])."</td>
        <td>R$".($row[33])."</td>
        <td>R$".($row[34])."</td>
        <td>R$".($row[35])."</td>
        <td>R$".($row[36])."</td>
        <td>R$".($row[37])."</td>
        <td>R$".($row[38])."</td>
        <td>R$".($row[39])."</td>
        <td>R$".($row[40])."</td>
        <td><a href='deletelinha.php?id=".$row[0]."'><img src='images/delete.png'></a></td>
        </tr>";
} 
?>
          </tbody>
    </table>
       </div>
    </body>
</html>


        