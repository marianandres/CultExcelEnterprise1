<?php

use mvc\routing\routingClass as routing ?>
<?php
use mvc\i18n\i18nClass as i18n ?>
<?php
use mvc\view\viewClass as view ?>
<?php
use mvc\config\configClass as config ?>
<?php
use \mvc\request\requestClass as request ?>
<?php $usuid = usuarioGustaCategoriaTableClass::USUARIO_ID ?>
<?php $id = usuarioGustaCategoriaTableClass::ID ?>
<?php $categoriaid = usuarioGustaCategoriaTableClass::CATEGORIA_ID ?>
<div class="fixed-left">
    <!-- Modal Start -->
    
    <!-- Modal logout -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                </div>
                <div class="modal-body">
                    <div class="text-center">
                        <h3><strong>Logout</strong> Confirmation</h3>
                        <p>Are you sure want to logout from this awesome system?</p>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">No!</button>
                    <a  href="<?php echo \mvc\routing\routingClass::getInstance()->getUrlWeb('shfSecurity', 'logout') ?>" class="btn btn-success">Si! , Deseo Cerrar Sesion</a>
                </div>
            </div>
        </div>
    </div>
    <!-- end Modal logout -->
    <!-- Begin page -->
    <div id="wrapper">


        <!-- Top Bar Start -->
        <?php view::includePartial('partials/topBarMenu') ?>
        <!-- Top Bar End -->
        <!-- Left Sidebar Start -->
        <?php view::includePartial('partials/sideBarMenu') ?>
        <!-- Left Sidebar End -->		    
        <!-- Right Sidebar Start -->
        <?php view::includePartial('partials/rightSideBar') ?>
        <!-- Right Sidebar End -->
        <!-- Start right content -->
        <div class="content-page">
            <!-- ============================================================== -->
            <!-- Start Content here -->
            <!-- ============================================================== -->
            <div class="content">
                <?php view::includeHandlerMessage() ?>
                <!-- Page Heading Start -->
                <div class="page-heading">
                    <h1><i class="fa fa-users"></i>  <?php echo i18n::__('UsuaGustaCategoria') ?></h1>
                    <h3><?php echo i18n::__('UsuGustCateSistema') ?></h3>            	</div>
                <!-- Page Heading End-->				<!-- Your awesome content goes here -->
                <div class="row">

                    <div class="col-md-12">
                        <div class="widget">
                            <div class="widget-header">
                                <h2><strong><?php echo i18n::__('UsuGustCateSistema') ?></strong></h2>
                                <div class="additional-btn">

                                    <a href="javascript:location.reload(true)" class="hidden reload"><i class="icon-ccw-1"></i></a>
                                    <a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
                                    <a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
                                </div>
                            </div>
                            <!--MODAL FILTER -->  
                            <div class="modal fade" id="myModalfilter" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title" id="myModalLabel"><?php i18n::__('Filtros') ?></h4>
                                        </div>
                                        <div class="modal-body">
                                            <form method="POST" role="form" id="filterForm" action="<?php echo routing::getInstance()->getUrlWeb('usuarioGustaCategoria', 'index') ?>">
                                                <div class="form-group">
                                                    <label for="filterusuario" class="col-sm-2 control-label"><?php i18n::__('Usuario') ?></label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" id="filterUsuario" name="filter[usuario]" placeholder="Nombre De Usuario">
                                                        </br>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-2 control-label"><?php i18n::__('FechaCreacion') ?></label>
                                                    <div class="col-sm-10">
                                                        <input type="date" class="form-control" id="filterDate1" name="filter[fechaCreacion1]">
                                                        </br>
                                                        <input type="date" class="form-control" id="filterDate2" name="filter[fechaCreacion2]">
                                                    </div>
                                                </div>

                                            </form>
                                        </div></br></br></br>
                                        </br></br></br></br>
                                        </br>

                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal"><?php i18n::__('Cerra') ?></button>
                                            <button type="button" onclick="$('#filterForm').submit()"  class="btn btn-primary"><?php i18n::__('Filtrar') ?></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--END MODAL FILTER--> 
                            <div class="widget-content">
                                <br>					
                                <div class="table-responsive">
                                    <form id="frmDeleteAll" class='form-horizontal' action="<?php echo routing::getInstance()->getUrlWeb('usuarioGustaCategoria', 'deleteSelect') ?>" method="POST">
                                        <div  style="margin-bottom: 10px; margin-left: 10px; margin-top: 20px;">
                                            <a href="#" class="btn btn-danger btn-medium" onclick="borrarSeleccion()"><?php echo i18n::__('Borrar') ?></a>
                                     
                                        </div>
                                        <table id="datatables-1" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                            <thead>
                                                <tr>
                                                    <th><input type="checkbox" id="chkAll"></th>
                                                    <th><?php echo i18n::__('CategoriaID') ?></th>
                                                    <th><?php echo i18n::__('usuarioID') ?></th>
                                                    <th><?php echo i18n::__('actions') ?></th>
                                                </tr>
                                            </thead>

                                            <tfoot>
                                                <tr>
                                                    <th><input type="checkbox" id="chkAll"></th>
                                                    <th><?php echo i18n::__('CategoriaID') ?></th>
                                                    <th><?php echo i18n::__('usuarioID') ?></th>
                                                    <th><?php echo i18n::__('actions') ?></th>
                                                </tr>
                                            </tfoot>

                                            <tbody>
                                                <?php foreach ($objUsuarioGustaCategoria as $usuario): ?>
                                                    <tr>
                                                        <td><input type="checkbox" name="chk[]" value="<?php echo $usuario->$id ?>"></td>
                                                        <td><?php echo $usuario->$usuid ?></td>
                                                        <td><?php echo $usuario->$categoriaid ?></td>
                                                        <td>
                                                            
                                                            <a href="<?php echo routing::getInstance()->getUrlWeb('usuarioGustaCategoria', 'edit', array(usuarioGustaCategoriaTableClass::ID => $usuario->$id)) ?>" class="btn btn-primary btn-xs"><?php echo  i18n::__('Editar') ?></a>
                                                            <a href="#" onclick="confirmarEliminar(<?php echo $usuario->$id ?>)" class="btn btn-danger btn-xs"><?php echo i18n::__('Eliminar') ?></a>
                                                            
                                                        </td>
                                                    </tr>
                                                <?php endforeach ?>
                                            </tbody>
                                        </table>
                                    </form>
                                    <form id="frmDelete" action="<?php echo routing::getInstance()->getUrlWeb('usuarioGustaCategoria', 'delete') ?>" method="POST">
                                        <input type="hidden" id="idDelete" name="<?php echo usuarioGustaCategoriaTableClass::getNameField(usuarioGustaCategoriaTableClass::ID, true) ?>">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Footer Start -->
                <?php view::includePartial('partials/footerBar') ?>
                <!-- Footer End -->			
            </div>
            <!-- ============================================================== -->
            <!-- End content here -->
            <!-- ============================================================== -->

        </div>
        <!-- End right content -->

    </div>
    <!-- End of page -->
    <!-- the overlay modal element -->
    <div class="md-overlay"></div>
    <!-- End of eoverlay modal -->
    <script>
        var resizefunc = [];
    </script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

</div>