<!DOCTYPE HTML>
<html>
<html>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" type="text/css" href="css/estilo.css"/>
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>   
    <script type="text/javascript" src="js/soma.js"></script>   
    <script src="dataTables.responsive.min.js"></script>
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


$query = "SELECT * FROM jukebox ORDER BY Interprete DESC";
$result = mysql_query($query) or die(mysql_error());
	include ('includes/global.php');
?>

<body>
    <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped" id="tabela">    
        <thead>
            <tr>
                <th>Interprete</th>
                <th>Codigo</th>
                <th>Titulo</th>
                <th>Inicio da Letra</th>
                <th>Idioma</th>
            </tr>
                    <tr>
                    <th><input type="text" id="txtColuna1"/></th>
                    <th><input type="text" id="txtColuna2"/></th>
                    <th><input type="text" id="txtColuna3"/></th>
                    <th><input type="text" id="txtColuna4"/></th>
                    <th><input type="text" id="txtColuna5"/></th>
                    <th></th>
                </tr>
                  </tr>
               </thead>
        <tbody>
<?
while($row = mysql_fetch_array($result)) {
	echo "<tr>
        <td>".$row[0]."</td>
        <td>".$row[1]."</td>
        <td>".$row[2]."</td>
        <td>".$row[3]."</td>
        <td>".$row[4]."</td>
        </tr>";
} 
?>
          </tbody>
        </table>
    </div>
    </body>
</html>