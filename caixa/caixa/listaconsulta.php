<?php
include('../includes/Functions.php');

//Include Notifications
include ('../includes/notification.php');
require_once("../includes/db2.php");
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

$query = mysql_query("SELECT * FROM leitura2 WHERE data >='$data' AND data <= '$dataf' ORDER BY data ASC");
?>
<!DOCTYPE HTML>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=euc-jp">

<meta name="viewport" content="width=device-width"/>
<title>Sistema de Leitura FCM Vs1.00</title>
 <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/estilo.css"/>
    <!-- MetisMenu CSS -->
    <link href="../css/plugins/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="../css/plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/sb-admin-2.css" rel="stylesheet">
    <link href="../css/custom.css" rel="stylesheet">
    <link href="../js/plugins/fullcalender/fullcalendar.css" rel="stylesheet">

     <!-- Datepicker CSS -->
     <link href="../css/datepicker.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

     <script src="../js/jquery-1.11.0.js"></script>
     <script src="../js/plugins/metisMenu/metisMenu.js"></script>
     <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="../js/script.js"></script>   
    <script type="text/javascript" src="../js/soma.js"></script>   
</head>
<script>
$(document).ready(function() {
    $('#example').DataTable();
} );
</script>
<?php
require_once("../includes/db2.php");
echo "<center>";

$query = "SELECT * FROM milhar WHERE nome ='".$operador."' AND data >='$data' AND data <= '$dataf' ORDER BY data DESC";
$result = mysql_query($query) or die(mysql_error());

$query3 = "SELECT * FROM centena WHERE nome ='".$operador."' AND data >='$data' AND data <= '$dataf' ORDER BY data DESC";
$result3 = mysql_query($query3) or die(mysql_error());

$query4 = "SELECT * FROM dezena WHERE nome ='".$operador."' AND data >='$data' AND data <= '$dataf' ORDER BY data DESC";
$result4 = mysql_query($query4) or die(mysql_error());

$query5 = "SELECT * FROM grupo WHERE nome ='".$operador."' AND data >='$data' AND data <= '$dataf' ORDER BY data DESC";
$result5 = mysql_query($query5) or die(mysql_error());

$query6 = "SELECT * FROM centenain WHERE nome ='".$operador."' AND data >='$data' AND data <= '$dataf' ORDER BY data DESC";
$result6 = mysql_query($query6) or die(mysql_error());

$query8 = "SELECT * FROM duquedeze WHERE nome ='".$operador."' AND data >='$data' AND data <= '$dataf' ORDER BY data DESC";
$result8 = mysql_query($query8) or die(mysql_error());

$query9 = "SELECT * FROM duquegp WHERE nome ='".$operador."' AND data >='$data' AND data <= '$dataf' ORDER BY data DESC";
$result9 = mysql_query($query9) or die(mysql_error());

$query10 = "SELECT * FROM mc WHERE nome ='".$operador."' AND data >='$data' AND data <= '$dataf' ORDER BY data DESC";
$result10 = mysql_query($query10) or die(mysql_error());

$query11 = "SELECT * FROM milharin WHERE nome ='".$operador."' AND data >='$data' AND data <= '$dataf' ORDER BY data DESC";
$result11 = mysql_query($query11) or die(mysql_error());

$query12 = "SELECT * FROM passevai WHERE nome ='".$operador."' AND data >='$data' AND data <= '$dataf' ORDER BY data DESC";
$result12 = mysql_query($query12) or die(mysql_error());

$query13 = "SELECT * FROM ternode WHERE nome ='".$operador."' AND data >='$data' AND data <= '$dataf' ORDER BY data DESC";
$result13 = mysql_query($query13) or die(mysql_error());

$query14 = "SELECT * FROM ternogp WHERE nome ='".$operador."' AND data >='$data' AND data <= '$dataf' ORDER BY data DESC";
$result14 = mysql_query($query14) or die(mysql_error());

include ('../includes/global.php');
?>

        <div id="divConteudo">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"><?php echo "<h1>Leitura</h1>";
                    echo "<h3>Cambista: ".$ponto."</h3>";?></h1>
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
        <td>".($row[10])."</td>
        <td>".($row[11])."</td>
        <td>".($row[12])."</td>
        <td>".($row[13])."</td>
        <td>".($row[14])."</td>
        <td>".($row[15])."</td>
        <td>".($row[16])."</td>
        <td>".($row[17])."</td>
        <td>".($row[18])."</td>
        <td>".($row[19])."</td>
        <td>".($row[20])."</td>
        <td>".($row[21])."</td>
        <td>".($row[22])."</td>
        <td>".($row[23])."</td>
        <td>".($row[24])."</td>
        <td>".($row[25])."</td>
        <td>".($row[26])."</td>
        <td>".($row[27])."</td>
        <td>".($row[28])."</td>
        <td>".($row[29])."</td>
        <td>".($row[30])."</td>
        <td>".($row[31])."</td>
        <td>".($row[32])."</td>
        <td>".($row[33])."</td>
        <td>".($row[34])."</td>
        <td>".($row[35])."</td>
        <td>".($row[36])."</td>
        <td>".($row[37])."</td>
        <td>".($row[38])."</td>
        <td>".($row[39])."</td>
        <td>".($row[40])."</td>
        <td><a href='deleteacerto.php?id=".$row[0]."'><img src='images/delete.png'></a></td>
        </tr>";
        
} 
while($row = mysql_fetch_array($result3)) {
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
        <td>".($row[10])."</td>
        <td>".($row[11])."</td>
        <td>".($row[12])."</td>
        <td>".($row[13])."</td>
        <td>".($row[14])."</td>
        <td>".($row[15])."</td>
        <td>".($row[16])."</td>
        <td>".($row[17])."</td>
        <td>".($row[18])."</td>
        <td>".($row[19])."</td>
        <td>".($row[20])."</td>
        <td>".($row[21])."</td>
        <td>".($row[22])."</td>
        <td>".($row[23])."</td>
        <td>".($row[24])."</td>
        <td>".($row[25])."</td>
        <td>".($row[26])."</td>
        <td>".($row[27])."</td>
        <td>".($row[28])."</td>
        <td>".($row[29])."</td>
        <td>".($row[30])."</td>
        <td>".($row[31])."</td>
        <td>".($row[32])."</td>
        <td>".($row[33])."</td>
        <td>".($row[34])."</td>
        <td>".($row[35])."</td>
        <td>".($row[36])."</td>
        <td>".($row[37])."</td>
        <td>".($row[38])."</td>
        <td>".($row[39])."</td>
        <td>".($row[40])."</td>
        <td><a href='deleteacerto.php?id=".$row[0]."'><img src='images/delete.png'></a></td>
        </tr>";
        
} 
while($row = mysql_fetch_array($result4)) {
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
        <td>".($row[10])."</td>
        <td>".($row[11])."</td>
        <td>".($row[12])."</td>
        <td>".($row[13])."</td>
        <td>".($row[14])."</td>
        <td>".($row[15])."</td>
        <td>".($row[16])."</td>
        <td>".($row[17])."</td>
        <td>".($row[18])."</td>
        <td>".($row[19])."</td>
        <td>".($row[20])."</td>
        <td>".($row[21])."</td>
        <td>".($row[22])."</td>
        <td>".($row[23])."</td>
        <td>".($row[24])."</td>
        <td>".($row[25])."</td>
        <td>".($row[26])."</td>
        <td>".($row[27])."</td>
        <td>".($row[28])."</td>
        <td>".($row[29])."</td>
        <td>".($row[30])."</td>
        <td>".($row[31])."</td>
        <td>".($row[32])."</td>
        <td>".($row[33])."</td>
        <td>".($row[34])."</td>
        <td>".($row[35])."</td>
        <td>".($row[36])."</td>
        <td>".($row[37])."</td>
        <td>".($row[38])."</td>
        <td>".($row[39])."</td>
        <td>".($row[40])."</td>
        <td><a href='deleteacerto.php?id=".$row[0]."'><img src='images/delete.png'></a></td>
        </tr>";
        
} 
while($row = mysql_fetch_array($result5)) {
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
        <td>".($row[10])."</td>
        <td>".($row[11])."</td>
        <td>".($row[12])."</td>
        <td>".($row[13])."</td>
        <td>".($row[14])."</td>
        <td>".($row[15])."</td>
        <td>".($row[16])."</td>
        <td>".($row[17])."</td>
        <td>".($row[18])."</td>
        <td>".($row[19])."</td>
        <td>".($row[20])."</td>
        <td>".($row[21])."</td>
        <td>".($row[22])."</td>
        <td>".($row[23])."</td>
        <td>".($row[24])."</td>
        <td>".($row[25])."</td>
        <td>".($row[26])."</td>
        <td>".($row[27])."</td>
        <td>".($row[28])."</td>
        <td>".($row[29])."</td>
        <td>".($row[30])."</td>
        <td>".($row[31])."</td>
        <td>".($row[32])."</td>
        <td>".($row[33])."</td>
        <td>".($row[34])."</td>
        <td>".($row[35])."</td>
        <td>".($row[36])."</td>
        <td>".($row[37])."</td>
        <td>".($row[38])."</td>
        <td>".($row[39])."</td>
        <td>".($row[40])."</td>
        <td><a href='deleteacerto.php?id=".$row[0]."'><img src='images/delete.png'></a></td>
        </tr>";
        
} 
while($row = mysql_fetch_array($result6)) {
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
        <td>".($row[10])."</td>
        <td>".($row[11])."</td>
        <td>".($row[12])."</td>
        <td>".($row[13])."</td>
        <td>".($row[14])."</td>
        <td>".($row[15])."</td>
        <td>".($row[16])."</td>
        <td>".($row[17])."</td>
        <td>".($row[18])."</td>
        <td>".($row[19])."</td>
        <td>".($row[20])."</td>
        <td>".($row[21])."</td>
        <td>".($row[22])."</td>
        <td>".($row[23])."</td>
        <td>".($row[24])."</td>
        <td>".($row[25])."</td>
        <td>".($row[26])."</td>
        <td>".($row[27])."</td>
        <td>".($row[28])."</td>
        <td>".($row[29])."</td>
        <td>".($row[30])."</td>
        <td>".($row[31])."</td>
        <td>".($row[32])."</td>
        <td>".($row[33])."</td>
        <td>".($row[34])."</td>
        <td>".($row[35])."</td>
        <td>".($row[36])."</td>
        <td>".($row[37])."</td>
        <td>".($row[38])."</td>
        <td>".($row[39])."</td>
        <td>".($row[40])."</td>
        <td><a href='deleteacerto.php?id=".$row[0]."'><img src='images/delete.png'></a></td>
        </tr>";
        
} 

while($row = mysql_fetch_array($result8)) {
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
        <td>".($row[10])."</td>
        <td>".($row[11])."</td>
        <td>".($row[12])."</td>
        <td>".($row[13])."</td>
        <td>".($row[14])."</td>
        <td>".($row[15])."</td>
        <td>".($row[16])."</td>
        <td>".($row[17])."</td>
        <td>".($row[18])."</td>
        <td>".($row[19])."</td>
        <td>".($row[20])."</td>
        <td>".($row[21])."</td>
        <td>".($row[22])."</td>
        <td>".($row[23])."</td>
        <td>".($row[24])."</td>
        <td>".($row[25])."</td>
        <td>".($row[26])."</td>
        <td>".($row[27])."</td>
        <td>".($row[28])."</td>
        <td>".($row[29])."</td>
        <td>".($row[30])."</td>
        <td>".($row[31])."</td>
        <td>".($row[32])."</td>
        <td>".($row[33])."</td>
        <td>".($row[34])."</td>
        <td>".($row[35])."</td>
        <td>".($row[36])."</td>
        <td>".($row[37])."</td>
        <td>".($row[38])."</td>
        <td>".($row[39])."</td>
        <td>".($row[40])."</td>
        <td><a href='deleteacerto.php?id=".$row[0]."'><img src='images/delete.png'></a></td>
        </tr>";
        
} 
while($row = mysql_fetch_array($result9)) {
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
        <td>".($row[10])."</td>
        <td>".($row[11])."</td>
        <td>".($row[12])."</td>
        <td>".($row[13])."</td>
        <td>".($row[14])."</td>
        <td>".($row[15])."</td>
        <td>".($row[16])."</td>
        <td>".($row[17])."</td>
        <td>".($row[18])."</td>
        <td>".($row[19])."</td>
        <td>".($row[20])."</td>
        <td>".($row[21])."</td>
        <td>".($row[22])."</td>
        <td>".($row[23])."</td>
        <td>".($row[24])."</td>
        <td>".($row[25])."</td>
        <td>".($row[26])."</td>
        <td>".($row[27])."</td>
        <td>".($row[28])."</td>
        <td>".($row[29])."</td>
        <td>".($row[30])."</td>
        <td>".($row[31])."</td>
        <td>".($row[32])."</td>
        <td>".($row[33])."</td>
        <td>".($row[34])."</td>
        <td>".($row[35])."</td>
        <td>".($row[36])."</td>
        <td>".($row[37])."</td>
        <td>".($row[38])."</td>
        <td>".($row[39])."</td>
        <td>".($row[40])."</td>
        <td><a href='deleteacerto.php?id=".$row[0]."'><img src='images/delete.png'></a></td>
        </tr>";
        
} 
while($row = mysql_fetch_array($result10)) {
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
        <td>".($row[10])."</td>
        <td>".($row[11])."</td>
        <td>".($row[12])."</td>
        <td>".($row[13])."</td>
        <td>".($row[14])."</td>
        <td>".($row[15])."</td>
        <td>".($row[16])."</td>
        <td>".($row[17])."</td>
        <td>".($row[18])."</td>
        <td>".($row[19])."</td>
        <td>".($row[20])."</td>
        <td>".($row[21])."</td>
        <td>".($row[22])."</td>
        <td>".($row[23])."</td>
        <td>".($row[24])."</td>
        <td>".($row[25])."</td>
        <td>".($row[26])."</td>
        <td>".($row[27])."</td>
        <td>".($row[28])."</td>
        <td>".($row[29])."</td>
        <td>".($row[30])."</td>
        <td>".($row[31])."</td>
        <td>".($row[32])."</td>
        <td>".($row[33])."</td>
        <td>".($row[34])."</td>
        <td>".($row[35])."</td>
        <td>".($row[36])."</td>
        <td>".($row[37])."</td>
        <td>".($row[38])."</td>
        <td>".($row[39])."</td>
        <td>".($row[40])."</td>
        <td><a href='deleteacerto.php?id=".$row[0]."'><img src='images/delete.png'></a></td>
        </tr>";
        
} 
while($row = mysql_fetch_array($result11)) {
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
        <td>".($row[10])."</td>
        <td>".($row[11])."</td>
        <td>".($row[12])."</td>
        <td>".($row[13])."</td>
        <td>".($row[14])."</td>
        <td>".($row[15])."</td>
        <td>".($row[16])."</td>
        <td>".($row[17])."</td>
        <td>".($row[18])."</td>
        <td>".($row[19])."</td>
        <td>".($row[20])."</td>
        <td>".($row[21])."</td>
        <td>".($row[22])."</td>
        <td>".($row[23])."</td>
        <td>".($row[24])."</td>
        <td>".($row[25])."</td>
        <td>".($row[26])."</td>
        <td>".($row[27])."</td>
        <td>".($row[28])."</td>
        <td>".($row[29])."</td>
        <td>".($row[30])."</td>
        <td>".($row[31])."</td>
        <td>".($row[32])."</td>
        <td>".($row[33])."</td>
        <td>".($row[34])."</td>
        <td>".($row[35])."</td>
        <td>".($row[36])."</td>
        <td>".($row[37])."</td>
        <td>".($row[38])."</td>
        <td>".($row[39])."</td>
        <td>".($row[40])."</td>
        <td><a href='deleteacerto.php?id=".$row[0]."'><img src='images/delete.png'></a></td>
        </tr>";
        
} 
while($row = mysql_fetch_array($result12)) {
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
        <td>".($row[10])."</td>
        <td>".($row[11])."</td>
        <td>".($row[12])."</td>
        <td>".($row[13])."</td>
        <td>".($row[14])."</td>
        <td>".($row[15])."</td>
        <td>".($row[16])."</td>
        <td>".($row[17])."</td>
        <td>".($row[18])."</td>
        <td>".($row[19])."</td>
        <td>".($row[20])."</td>
        <td>".($row[21])."</td>
        <td>".($row[22])."</td>
        <td>".($row[23])."</td>
        <td>".($row[24])."</td>
        <td>".($row[25])."</td>
        <td>".($row[26])."</td>
        <td>".($row[27])."</td>
        <td>".($row[28])."</td>
        <td>".($row[29])."</td>
        <td>".($row[30])."</td>
        <td>".($row[31])."</td>
        <td>".($row[32])."</td>
        <td>".($row[33])."</td>
        <td>".($row[34])."</td>
        <td>".($row[35])."</td>
        <td>".($row[36])."</td>
        <td>".($row[37])."</td>
        <td>".($row[38])."</td>
        <td>".($row[39])."</td>
        <td>".($row[40])."</td>
        <td><a href='deleteacerto.php?id=".$row[0]."'><img src='images/delete.png'></a></td>
        </tr>";
        
} 
while($row = mysql_fetch_array($result13)) {
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
        <td>".($row[10])."</td>
        <td>".($row[11])."</td>
        <td>".($row[12])."</td>
        <td>".($row[13])."</td>
        <td>".($row[14])."</td>
        <td>".($row[15])."</td>
        <td>".($row[16])."</td>
        <td>".($row[17])."</td>
        <td>".($row[18])."</td>
        <td>".($row[19])."</td>
        <td>".($row[20])."</td>
        <td>".($row[21])."</td>
        <td>".($row[22])."</td>
        <td>".($row[23])."</td>
        <td>".($row[24])."</td>
        <td>".($row[25])."</td>
        <td>".($row[26])."</td>
        <td>".($row[27])."</td>
        <td>".($row[28])."</td>
        <td>".($row[29])."</td>
        <td>".($row[30])."</td>
        <td>".($row[31])."</td>
        <td>".($row[32])."</td>
        <td>".($row[33])."</td>
        <td>".($row[34])."</td>
        <td>".($row[35])."</td>
        <td>".($row[36])."</td>
        <td>".($row[37])."</td>
        <td>".($row[38])."</td>
        <td>".($row[39])."</td>
        <td>".($row[40])."</td>
        <td><a href='deleteacerto.php?id=".$row[0]."'><img src='images/delete.png'></a></td>
        </tr>";
        
} 
while($row = mysql_fetch_array($result14)) {
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
        <td>".($row[10])."</td>
        <td>".($row[11])."</td>
        <td>".($row[12])."</td>
        <td>".($row[13])."</td>
        <td>".($row[14])."</td>
        <td>".($row[15])."</td>
        <td>".($row[16])."</td>
        <td>".($row[17])."</td>
        <td>".($row[18])."</td>
        <td>".($row[19])."</td>
        <td>".($row[20])."</td>
        <td>".($row[21])."</td>
        <td>".($row[22])."</td>
        <td>".($row[23])."</td>
        <td>".($row[24])."</td>
        <td>".($row[25])."</td>
        <td>".($row[26])."</td>
        <td>".($row[27])."</td>
        <td>".($row[28])."</td>
        <td>".($row[29])."</td>
        <td>".($row[30])."</td>
        <td>".($row[31])."</td>
        <td>".($row[32])."</td>
        <td>".($row[33])."</td>
        <td>".($row[34])."</td>
        <td>".($row[35])."</td>
        <td>".($row[36])."</td>
        <td>".($row[37])."</td>
        <td>".($row[38])."</td>
        <td>".($row[39])."</td>
        <td>".($row[40])."</td>
        <td><a href='deleteacerto.php?id=".$row[0]."'><img src='images/delete.png'></a></td>
        </tr>";
        
} 
?>
         </tbody>
    </table>
       </div>
    </body>
    
    <?php
require_once("includes/db2.php");
$query_valor = "SELECT SUM(replace(substr(valortotal, 3),',','.'))as SOMA FROM milhar WHERE nome ='".$operador."' AND data >='$data' AND data <= '$dataf' ORDER BY data DESC";
$result_valor = mysql_query($query_valor);
while ($rows = mysql_fetch_assoc($result_valor)) {
$sald = $rows["SOMA"];
}

$query_valor2 = "SELECT SUM(replace(substr(valortotal, 3),',','.'))as SOMA2 FROM centena WHERE nome ='".$operador."' AND data >='$data' AND data <= '$dataf' ORDER BY data DESC";
$result_valor2 = mysql_query($query_valor2);
while ($rows = mysql_fetch_assoc($result_valor2)) {
$sald2 = $rows["SOMA2"];
}

$query_valor3 = "SELECT SUM(replace(substr(valortotal, 3),',','.'))as SOMA3 FROM dezena WHERE nome ='".$operador."' AND data >='$data' AND data <= '$dataf' ORDER BY data DESC";
$result_valor3 = mysql_query($query_valor3);
while ($rows = mysql_fetch_assoc($result_valor3)) {
$sald3 = $rows["SOMA3"];
}

$query_valor4 = "SELECT SUM(replace(substr(valortotal, 3),',','.'))as SOMA4 FROM grupo WHERE nome ='".$operador."' AND data >='$data' AND data <= '$dataf' ORDER BY data DESC";
$result_valor4 = mysql_query($query_valor4);
while ($rows = mysql_fetch_assoc($result_valor4)) {
$sald4 = $rows["SOMA4"];
}

$query_valor5 = "SELECT SUM(replace(substr(valortotal, 3),',','.'))as SOMA5 FROM centenain WHERE nome ='".$operador."' AND data >='$data' AND data <= '$dataf' ORDER BY data DESC";
$result_valor5 = mysql_query($query_valor5);
while ($rows = mysql_fetch_assoc($result_valor5)) {
$sald5 = $rows["SOMA5"];
}

$query_valor6 = "SELECT SUM(replace(substr(valortotal, 3),',','.'))as SOMA6 FROM duquedeze WHERE nome ='".$operador."' AND data >='$data' AND data <= '$dataf' ORDER BY data DESC";
$result_valor6 = mysql_query($query_valor6);
while ($rows = mysql_fetch_assoc($result_valor6)) {
$sald6 = $rows["SOMA6"];
}

$query_valor7 = "SELECT SUM(replace(substr(valortotal, 3),',','.'))as SOMA7 FROM duquegp WHERE nome ='".$operador."' AND data >='$data' AND data <= '$dataf' ORDER BY data DESC";
$result_valor7 = mysql_query($query_valor7);
while ($rows = mysql_fetch_assoc($result_valor7)) {
$sald7 = $rows["SOMA7"];
}

$query_valor8 = "SELECT SUM(replace(substr(valortotal, 3),',','.'))as SOMA8 FROM mc WHERE nome ='".$operador."' AND data >='$data' AND data <= '$dataf' ORDER BY data DESC";
$result_valor8 = mysql_query($query_valor8);
while ($rows = mysql_fetch_assoc($result_valor8)) {
$sald8 = $rows["SOMA8"];
}

$query_valor9 = "SELECT SUM(replace(substr(valortotal, 3),',','.'))as SOMA9 FROM milharin WHERE nome ='".$operador."' AND data >='$data' AND data <= '$dataf' ORDER BY data DESC";
$result_valor9 = mysql_query($query_valor9);
while ($rows = mysql_fetch_assoc($result_valor9)) {
$sald9 = $rows["SOMA9"];
}

$query_valor10 = "SELECT SUM(replace(substr(valortotal, 3),',','.'))as SOMA10 FROM passevai WHERE nome ='".$operador."' AND data >='$data' AND data <= '$dataf' ORDER BY data DESC";
$result_valor10 = mysql_query($query_valor10);
while ($rows = mysql_fetch_assoc($result_valor10)) {
$sald10 = $rows["SOMA10"];
}

$query_valor11 = "SELECT SUM(replace(substr(valortotal, 3),',','.'))as SOMA11 FROM ternode WHERE nome ='".$operador."' AND data >='$data' AND data <= '$dataf' ORDER BY data DESC";
$result_valor11 = mysql_query($query_valor11);
while ($rows = mysql_fetch_assoc($result_valor11)) {
$sald11 = $rows["SOMA11"];
}

$query_valor12 = "SELECT SUM(replace(substr(valortotal, 3),',','.'))as SOMA12 FROM ternogp WHERE nome ='".$operador."' AND data >='$data' AND data <= '$dataf' ORDER BY data DESC";
$result_valor12 = mysql_query($query_valor12);
while ($rows = mysql_fetch_assoc($result_valor12)) {
$sald12 = $rows["SOMA12"];
}

$saldtotal = $sald+$sald2+$sald3+$sald4+$sald5+$sald6+$sald7+$sald8+$sald9+$sald10+$sald11+$sald12;


?>
<link rel="stylesheet" type="text/css" href="../css/estilo.css"/>
       <body>
    <div id="divConteudo1">
        <table class="table table-bordered table-hover table-striped" id="tabela2"> 
            <thead>
                <tr>
                    <th>Valor Total</th>
                    <th>Saida Total</th>
                    <th>Saldo Bruto</th>
                    <th>Comissão Ponto Total</th>
                    <th>Liquido % Empresa a Receber</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo "<h3>R$: ".number_format($saldtotal, 2, '.', ',')."</h3>";?></td>
                    <td><?php echo "<h3>R$: ".number_format("1.00", 2, '.', ',')."</h3>";?></td>
                    <td><?php echo "<h3>R$: ".number_format("1.00", 2, '.', ',')."</h3>";?></td>
                    <td><?php echo "<h3>R$: ".number_format("1.00", 2, '.', ',')."</h3>";?></td>
                    <td><?php echo "<h3>R$: ".number_format("1.00", 2, '.', ',')."</h3>";?></td>
                    </tr>
            </tbody>
        </table>
    </div>
</body>
</html>


