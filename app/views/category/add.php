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
<h1 class="page-header"><i class="fa fa-plus-circle fa-fw"></i> Adicionar Categoria</h1>
</div>
</div>
<div class="row">
    <div class="col-md-6">

<div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-plus-circle fa-fw"></i> Adicionar categoria
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
        
			<form id="form" action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                  
                    <div class="form-group">
                        <label for="text1" class="control-label col-lg-4">Título</label>
                        <div class="col-lg-8">
						<input class="text-input form-control" name="title" type="text"  /> (Ex. Pizzaria)
					</div></div>
                    <div class="form-group">
                        <label for="text1" class="control-label col-lg-4">Categoria Principal</label>
                        <div class="col-lg-8">
                        <select class="text-input form-control" name="parent">
                        <? foreach($parents_cat as $cat){
                            ?>
                                <option value="<?=$cat["id"]; ?>"><?=$cat["title"]; ?></option>
                            <?
                        } ?>
						</select>
					</div></div>
                    
                    <div class="form-group">
                        <label for="text1" class="control-label col-lg-4">Descrição</label>
                        <div class="col-lg-8">
						<textarea class="text-input small-input form-control" name="description"></textarea>
					</div></div>
                    <div class="form-group">
                        <label for="text1" class="control-label col-lg-4">Imagem destaque</label>
                        <div class="col-lg-8">
						<input type="file" name="featureimage" class="" />
					</div></div>
                    <p>
						<input class="btn" type="submit" name="add" value="Adicionar" />
					</p>
            </form>
</div>
</div>

    </div>
    
    <div class="col-md-6">

<div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-bell fa-fw"></i> Listar Categorias
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">


<div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Título</th>
                                            <th>Pai</th>
                                            <th>Descrição</th>
                                            <th>ícone</th>
                                            <th>Opções</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <? foreach($data as $d){ ?>
                                        <tr class="odd gradeX">
                                            <td><?=$d["id"]; ?></td>
                                            <td><?=$d["title"]; ?></td>
                                            <td><?=$q->ge_value("Select `title` from `maincategory` where `id`=".$d['parent']);?></td>
                                            <td><?=$d["description"]; ?></td>
                                            <td class="center"><?=$d["icon"]; ?></td>
                                            <td class="center">
                                             <a href="<?=common::get_component_link(array('category','edit')).'&id='.$d['id']; ?>" class=""  title="Editar"  style="float: left; padding: 5px;" ><i class="glyphicon glyphicon-pencil"></i></a>
										 <a href="<?=common::get_component_link(array('category','delete')).'&id='.$d['id']; ?>" class="" style="float: left; padding: 5px;"  title="Apagar"><i class="glyphicon glyphicon-remove"></i></a> 
										
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