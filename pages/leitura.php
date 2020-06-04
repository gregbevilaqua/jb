<!DOCTYPE HTML>
<html>
<html>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" type="text/css" href="css/estilo.css"/>
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>   
    <script type="text/javascript" src="js/soma.js"></script>   
<head>
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

$operador = $_GET['operador'];

$query = "SELECT * FROM leitura WHERE operador ='".$operador."' ORDER BY data DESC";
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

    <div id="divConteudo">
        <table class="table table-bordered table-hover table-striped" id="tabela">    
        <thead>
            <tr>
                <th>Operador</th>
                <th>Data</th>
                <th>Hora</th>
                <th>Ponto</th>
                <th>Maquina</th>
                <th>Entrada</th>
                <th>Saida</th>
                <th>Valor Moeda</th>
                <th>Apagar</th>
            </tr>
                    <tr>
                    <th><input type="text" id="txtColuna1"/></th>
                    <th><input type="text" id="txtColuna2"/></th>
                    <th><input type="text" id="txtColuna3"/></th>
                    <th><input type="text" id="txtColuna4"/></th>
                    <th><input type="text" id="txtColuna5"/></th>
                    <th><input type="text" id="txtColuna6"/></th>
                    <th><input type="text" id="txtColuna7"/></th>
                    <th><input type="text" id="txtColuna8"/></th>
                    <th></th>
                </tr>
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
        <td><a href='deletelinha.php?id=".$row[0]."'><img src='images/delete.png'></a></td>
        </tr>";
} 
?>
          </tbody>
        </table>
    </div>
    </body>
</html>