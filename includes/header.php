<?php
include ('includes/notification.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sistema Para Estrela</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

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
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="headmain">
            <div class="navbar-header">

                <a class="navbar-brand" href="index.php">Home</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li>
                     <?php 
                    echo $Welcome;?>, 
                    <?php 
                    echo $ColUser['FirstName'];?>
                </li>
                
               
                
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        
                        <li> <a <?php ActiveClass("index.php?page=Settings");?> href="index.php?page=Settings"><i class="fa fa-gear fa-fw"></i> <?php echo $Settings;?></a>
                        </li>
                        <li class="divider"></li>
                         <li>
                            <li>
                                    <a <?php ActiveClass("index.php?page=novousuario");?> href="index.php?page=novousuario"><i class="fa fa-caret-right"></i> <?php echo "Cadastro Cambista";?></a>
                                </li>
                                 <li class="divider"></li>
                         <li>
                              <li>
                                    <a <?php ActiveClass("index.php?page=regiao");?> href="index.php?page=regiao"><i class="fa fa-caret-right"></i> <?php echo "Cadastro Região";?></a>
                                </li>
                                 <li class="divider"></li>
                                 <li>
                                    <a <?php ActiveClass("index.php?page=gerente");?> href="index.php?page=gerente"><i class="fa fa-caret-right"></i> <?php echo "Cadastro Gerente";?></a>
                                </li>
                                 <li class="divider"></li>
                         <li>
                             
                            <li>
                                    <a <?php ActiveClass("index.php?page=sorteios");?> href="index.php?page=sorteios"><i class="fa fa-caret-right"></i> <?php echo "Cadastro Cotações";?></a>
                                </li>
                                            <li class="divider"></li>
                         <li>
                             <li>
                                    <a <?php ActiveClass("index.php?page=limite");?> href="index.php?page=limite"><i class="fa fa-caret-right"></i> <?php echo "Limite de Aposta";?></a>
                                </li>
                                            <li class="divider"></li>
                         <li>
                            <li>
                                    <a <?php ActiveClass("index.php?page=consulta3");?> href="index.php?page=consulta3"><i class="fa fa-caret-right"></i> <?php echo "Cadastro Resultados";?></a>
                                </li>
                                             <li class="divider"></li>
                                 <li>
                                    <a <?php ActiveClass("index.php?page=gerencia");?> href="index.php?page=gerencia"><i class="fa fa-caret-right"></i> <?php echo "Relatorio Gerente";?></a>
                                </li>
                        
                                <li class="divider"></li>
                                <li>
                                    <a <?php ActiveClass("index.php?page=home");?> href="index.php?page=home"><i class="fa fa-caret-right"></i> <?php echo "Lista de Cambistas";?></a>
                                </li>
                        
                                <li class="divider"></li>
                                <li>
                                    <a <?php ActiveClass("index.php?page=delgerente");?> href="index.php?page=delgerente"><i class="fa fa-caret-right"></i> <?php echo "Lista de Gerentes";?></a>
                                </li>
                        
                                <li class="divider"></li>
                                <li>
                                    <a <?php ActiveClass("index.php?page=listaregi");?> href="index.php?page=listaregi"><i class="fa fa-caret-right"></i> <?php echo "Lista de Região";?></a>
                                </li>
                        
                                <li class="divider"></li>
                       <li>
                            <a <?php ActiveClass("index.php?page=Settings");?> href="index.php?page=Settings"><i class="fa fa-user"> </i> <?php echo $ProfileSettings;?></a>
                        </li>
                            <li class="divider"></li>
                         <li>
                            <a href="logout.php"><i class="glyphicon glyphicon-log-out"></i>  <?php echo $Logout;?></a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->
        </div>
            
                <!-- /.sidebar-collapse -->
           
            <!-- /.navbar-static-side -->
        </nav>

<script>

$(document).ready(function () {
    $(this).parent().addClass("collapse");
    $(".parent").on('click', function () {
        $(this).parent().find("#subitem").slideToggle();
    });
});

</script>
      
