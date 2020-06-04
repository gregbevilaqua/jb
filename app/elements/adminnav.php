        <nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand logo" href="index.php" style="height: 30px; padding: 3px;"><img src="<?=ADMIN_THEME ?>/images/logo.png" height="30px" /> </a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                       <!-- <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li> -->
                        <?
                        if(common::get_session(ADMIN_LOGIN_TYPE)=="admin")
                        {
                            ?>
                            <li><a href="<?=common::get_component_link(array("user","add")); ?>"><i class="fa fa-users fa-fw"></i> Adicionar usuário</a>
                            <?
                        }
                         ?>
                         <li><a href="<?=common::get_component_link(array("user","changepassword")); ?>"><i class="fa fa-lock fa-fw"></i> Alterar Senha</a>
                        <li><a href="<?=common::get_component_link(array("home","logout")); ?>"><i class="fa fa-sign-out fa-fw"></i> Desconectar</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default navbar-static-side" id="navbar-default" role="navigation">
                <div class="sidebar-collapse">
                <? if(common::get_session(ADMIN_LOGIN_TYPE)=="user"){
                    
                }else{ ?>
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="index.php"><i class="fa fa-dashboard fa-fw"></i> Painel de Controle</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-list fa-fw"></i>Categoria Principal<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?=common::get_component_link(array("maincategory","add")); ?>">Adicionar nova</a>
                                </li>
                                         </ul>
                            <!-- /.nav-second-level -->
                        </li>
                                                <li>
                            <a href="#"><i class="fa fa-list fa-fw"></i>Categoria Secundaria<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?=common::get_component_link(array("maincategory2","add")); ?>">Adicionar nova</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-list fa-fw"></i>Categorias<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?=common::get_component_link(array("category","add")); ?>">Adicionar nova</a>
                                </li>
                                
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-sitemap fa-fw"></i> Empresas<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?=common::get_component_link(array("company","register")); ?>">Cadastrar</a>
                                </li>
                                <li>
                                    <a href="<?=common::get_component_link(array("company","list")); ?>">Listar Empresas</a>
                                </li>
                                
                               
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                       
                    </ul>
                <? } ?>
                    <!-- /#side-menu -->
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
