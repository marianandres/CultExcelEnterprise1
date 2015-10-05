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
<?php $nombre = tipoDocumentoTableClass::NOMBRE ?>
<?php $id = tipoDocumentoTableClass::ID ?>
<?php $created = tipoDocumentoTableClass::CREATED_AT ?>
<?php view::includePartial('tipoDocumento/tipoDocumentoModalWindows') ?>
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
                <!-- Page Heading Start -->
                <div class="page-heading">
                    <h1><i class="fa fa-file-text-o"></i>   <?php echo i18n::__('tipoDocumento') ?></h1>
                    <h3><?php echo i18n::__('TipoDocumentoSistem') ?></h3>            	</div>
                <!-- Page Heading End-->				<!-- Your awesome content goes here -->
                <div class="row">

                    <div class="col-md-12">
                        <div class="widget">
                            <div class="widget-header">
                                <h2><strong>   <?php echo i18n::__('TipoDocumentoSistem') ?></strong></h2>
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
                                            <h4 class="modal-title" id="myModalLabel"><?php i18n::__('tipoDocumento') ?>Filtros</h4>
                                        </div>
                                        <div class="modal-body">
                                            <form method="POST" role="form" id="filterForm" action="<?php echo routing::getInstance()->getUrlWeb('tipoDocumento', 'index') ?>">
                                                <div class="form-group">
                                                    <label for="filterusuario" class="col-sm-2 control-label"><?php i18n::__('tipoDocumento') ?>Usuario</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" id="filterUsuario" name="filter[usuario]" placeholder="Nombre De Usuario">
                                                        </br>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-2 control-label"><?php i18n::__('tipoDocumento') ?>Fecha Creacion</label>
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
                                            <button type="button" onclick="$('#filterForm').submit()"  class="btn btn-primary"><?php i18n::__('tipoDocumento') ?>Filtrar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--END MODAL FILTER--> 
                            <div class="widget-content">
                                <br>					
                                <div class="table-responsive">
                                    <form id="frmDeleteAll" class='form-horizontal' action="<?php echo routing::getInstance()->getUrlWeb('tipoDocumento', 'deleteSelect') ?>" method="POST">
                                        <div  style="margin-bottom: 10px; margin-left: 10px; margin-top: 20px;">
                                            <button type="button" class="btn  btn-success btn-medium" data-toggle="modal" data-target="#newTD" ><i class="fa fa-plus-square-o"></i> <?php echo i18n::__('Nuevo') ?> </button>
                                            <a href="#" class="btn btn-danger btn-medium" onclick="borrarSeleccion()"><?php echo  i18n::__('Borrar') ?></a>
<!--                                            <a href="<?php echo routing::getInstance()->getUrlWeb('tipoDocumento', 'report') ?>" class="btn btn-default btn-medium"><i class="fa fa-file-pdf-o"></i> <?php i18n::__('ExporPDF') ?></a>
                                            <a href="#" onclick="window.print();" class="btn btn-primary btn-medium" title="Imprimir"><i class="fa fa-print"></i> </a> 
                                            <button type="button" class="btn btn-primary btn-medium" data-toggle="modal" data-target="#myModalfilter"><i class="fa fa-search"></i><?php i18n::__('Filtro') ?> </button>
                                            <a class="btn btn-default btn-medium" href="<?php echo routing::getInstance()->getUrlWeb('tipoDocumento', 'deleteFilters') ?>"><i class="fa fa-minus-circle"></i><?php i18n::__('EliminarFiltros') ?></a>-->
                                        </div>
                                        <table id="datatables-1" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                            <thead>
                                                <tr>
                                                    <th><input type="checkbox" id="chkAll"></th>
                                                    <th><?php echo i18n::__('tipoDocumento') ?></th>
                                                    <th><?php echo i18n::__('fechaCreacion') ?></th>
                                                    <th><?php echo i18n::__('actions') ?></th>
                                                </tr>
                                            </thead>

                                            <tfoot>
                                                <tr>
                                                    <th><input type="checkbox" id="chkAll"></th>
                                                    <th> <?php echo i18n::__('tipoDocumento') ?></th>
                                                    <th><?php echo i18n::__('fechaCreacion') ?></th>
                                                    <th><?php echo i18n::__('actions') ?></th>
                                                </tr>
                                            </tfoot>

                                            <tbody>
                                                <?php foreach ($objTipoDocumento as $usuario): ?>
                                                  <tr>
                                                      <td><input type="checkbox" name="chk[]" value="<?php echo $usuario->$id ?>"></td>
                                                      <td><?php echo $usuario->$nombre ?></td>
                                                      <td><?php echo $usuario->$created ?></td>
                                                      <td>
                                                          <!--                    <a href="#" class="btn btn-warning btn-xs">Ver</a>-->
                                                          <a href="<?php echo routing::getInstance()->getUrlWeb('tipoDocumento', 'edit', array(tipoDocumentoTableClass::ID => $usuario->$id)) ?>" class="btn btn-primary btn-xs"><?php echo i18n::__('Editar') ?></a>
                                                          <a href="#" onclick="confirmarEliminar(<?php echo $usuario->$id ?>)" class="btn btn-danger btn-xs"><?php echo i18n::__('Eliminar') ?></a>
<!--                                                          <a href="<?php echo routing::getInstance()->getUrlWeb('usuarioCredencial', 'index', array(usuarioCredencialTableClass::getNameField(usuarioCredencialTableClass::USUARIO_ID, true) => $usuario->$id)) ?>" class="btn btn-success btn-xs"><i class="fa fa-external-link-square"></i> <?php echo i18n::__('Detalles') ?></a>-->

                                                      </td>
                                                  </tr>
                                                <?php endforeach ?>
                                            </tbody>
                                        </table>
                                    </form>
                                    <form id="frmDelete" action="<?php echo routing::getInstance()->getUrlWeb('tipoDocumento', 'delete') ?>" method="POST">
                                        <input type="hidden" id="idDelete" name="<?php echo tipoDocumentoTableClass::getNameField(tipoDocumentoTableClass::ID, true) ?>">
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