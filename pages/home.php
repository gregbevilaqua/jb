<!DOCTYPE HTML>
<html>
    <?php
include ('includes/notification.php');
?>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Gerenciador financeiro</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/estilo.css"/>
    <!-- MetisMenu CSS -->
    <link href="css/plugins/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="css/plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin-2.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    <link href="js/plugins/fullcalender/fullcalendar.css" rel="stylesheet">

     <!-- Datepicker CSS -->
     <link href="css/datepicker.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

     <script src="js/jquery-1.11.0.js"></script>
     <script src="js/plugins/metisMenu/metisMenu.js"></script>
     <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>   
    <script type="text/javascript" src="js/soma.js"></script>   
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
include ('includes/global.php');

require_once("includes/db2.php");

$query = "SELECT * FROM user";
$result = mysql_query($query);
$row = mysql_fetch_array($result);

?>
       <div id="divConteudo">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"><?php echo "<center>";
echo "<h1>Seja bem vindo,".$ColUser['FirstName']."</h1>";
echo "<h3>Cambistas Cadastrados:</h3>";
                    echo "<h3>Cambista: ".$operador."</h3>";?></h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
               
<body>

     <div id="divConteudo">
 <div class="table-responsive">
            <table class="table table-bordered table-hover table-striped" id= "tabela">      
        <thead>
            <tr>
                <th>Busca Cambista</th>
                <th>ID Cambista</th>
                <th>Leitura Geral por Data</th>
                <th>Leitura Geral por Sorteio</th>
                <th>Ações</th>
            </tr>
            <tr>
                    <th><input type="text" id="txtColuna1"/></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                </thead>
        <tbody>
<?
$result = mysql_query("SELECT * FROM cambista");
while($row = mysql_fetch_array($result)) {
    	echo "<tr>
        <td>".$row[2]."</td>
        <td>".$row[1]."</td>
        <td><a href='index.php?page=consulta&operador=".$row[2]."'><img src='images/entrar.png'></a></td>
        <td><a href='index.php?page=consulta2&operador=".$row[2]."'><img src='images/entrar.png'></a></td>
        <td><a href='index.php?page=perfil&operador=".$row[2]."'><img src='images/edit.png'><a href='index.php?page=deluser&user=".$row[2]."'><img src='images/delete.png'></a></td>
        </tr>";

}
?>
         </tbody>
    </table>
    </div>
    </div>
       </div>
          </div>
    </body>
</html>