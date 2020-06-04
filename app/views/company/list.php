<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Start Bootstrap - SB Admin Version 2.0 Demo</title>

    <!-- Core CSS - Include with every page -->
    <link href="<?=ADMIN_THEME ?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=ADMIN_THEME ?>font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- Page-Level Plugin CSS - Dashboard -->
    <link href="<?=ADMIN_THEME ?>css/plugins/morris/morris-0.4.3.min.css" rel="stylesheet">
    <link href="<?=ADMIN_THEME ?>css/plugins/timeline/timeline.css" rel="stylesheet">

    <!-- SB Admin CSS - Include with every page -->
    <link href="<?=ADMIN_THEME ?>css/sb-admin.css" rel="stylesheet">
    <link href="<?=ADMIN_THEME ?>css/style.css" rel="stylesheet">
</head>

<body>

    <div id="wrapper">

        <? echo common::elements("adminnav"); ?>
        <div id="page-wrapper">
<div class="row">
<div class="col-lg-12">
<h1 class="page-header">Listar Empresas</h1>
</div>
</div>
<div class="row">
   
    
    <div class="col-md-12">
<? if ( common::do_show_message() ) {
		          echo common::show_message();	
            } ?> 
        <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-bell fa-fw"></i> Listar Empresas
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">


<div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Empresa</th>
                                            <th>E-mail</th>
                                            <th>Logo</th>
                                            <th>Status</th>
                                            <th>Ordem</th>
                                            <th>GOLD</th>
                                            <th>Verificado</th>
                                            <th>Editar</th>
                                            <th>Ver</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <? foreach($data as $d){ ?>
                                        <tr class="odd gradeX">
                                            <td><?=$d["id"]; ?></td>
                                            <td><?=$d["company"]; ?></td>
                                            <td><?=$d["email1"]." / ".$d["email2"]; ?></td>
                                            <td><img class="thumbnail" src="<? if(file_exists("userfiles/contents/icon/".$d["logo"]) && $d["logo"]!=""){
                                                echo "userfiles/contents/icon/".$d["logo"];
                                            }else
                                            {
                                                echo "themes/admin/images/ic_launcher.png";
                                            } ?>
                                            " alt="NO IMAGE" /></td>
                                            <td><? echo $d["status"]==0 ? "<span class='red   text-danger'>Pendente</span>" : "<span class='green  text-success'>Ativo</span>"; ?></td>
                                            <td><?=$d["order"]; ?></td>
                                            <td><? echo $d["special"]==0 ? "<span class='red text-danger'>No</span>" : "<span class='green text-success'>Yes</span>";  ?></td>
                                            <td><? echo $d["top"]==0 ? "<span class='red text-danger'>No</span>" : "<span class='green text-success'>Yes</span>";  ?></td>
                                           
                                            <td class="center"><a href="<?=common::get_component_link(array("company","delete"))."&id=".$d["id"]; ?>" title="delete"><i class="glyphicon glyphicon-remove-circle"></i></a>
                                            <a href="<?=common::get_component_link(array("company","edit"))."&id=".$d["id"]; ?>" title="Edit"><i class="fa fa-edit"></i></a></td>
                                            <td class="center">
                                            
                                            <a class="btn btn-primary btn-sm " href="<? echo common::get_component_link(array("inquiry","list"))."&id=".$d["id"]; ?>" title="Mensagens" ><i class="glyphicon glyphicon-envelope"></i></a>
                                            </td>
                                        </tr>
                                     <? } ?>   
                                    </tbody>
                                </table>
                            </div>



                        </div>


        </div>    

    </div>
    
</div>

            
            
			</div>
                  </div>
    <!-- /#wrapper -->
<div id="footer">
				<? echo common::elements("footer"); ?>
			</div>
    <!-- Core Scripts - Include with every page -->
    <script src="<?=ADMIN_THEME ?>js/jquery-1.10.2.js"></script>
    <script src="<?=ADMIN_THEME ?>js/bootstrap.min.js"></script>
    <script src="<?=ADMIN_THEME ?>js/plugins/metisMenu/jquery.metisMenu.js"></script>


    <!-- Page-Level Plugin Scripts - Tables -->
    <script src="<?=ADMIN_THEME ?>js/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="<?=ADMIN_THEME ?>js/plugins/dataTables/dataTables.bootstrap.js"></script>
    <!-- SB Admin Scripts - Include with every page -->
    <script src="<?=ADMIN_THEME ?>js/sb-admin.js"></script>

    <!-- Page-Level Demo Scripts - Dashboard - Use for reference -->
    
        <script>
    $(document).ready(function() {
        $('#dataTables-example').dataTable();
    });
    </script>

</body>

</html>
