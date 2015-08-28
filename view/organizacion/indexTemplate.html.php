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
<?php $id = organizacionTableClass::ID ?>
<?php $nombre = organizacionTableClass::NOMBRE ?>
<?php $paginaweb = organizacionTableClass::PAGINA_WEB ?>
<?php $direccion = organizacionTableClass::DIRECCION ?>
<?php $correo = organizacionTableClass::CORREO ?>
<?php $telefono = organizacionTableClass::TELEFONO ?>
<div class="fixed-left">
    <!-- Modal Start -->
    <!-- Modal Task Progress -->	
    <div class="md-modal md-3d-flip-vertical" id="task-progress">
        <div class="md-content">
            <h3><strong>Task Progress</strong> Information</h3>
            <div>
                <p>CLEANING BUGS</p>
                <div class="progress progress-xs for-modal">
                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                        <span class="sr-only">80&#37; Complete</span>
                    </div>
                </div>
                <p>POSTING SOME STUFF</p>
                <div class="progress progress-xs for-modal">
                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 65%">
                        <span class="sr-only">65&#37; Complete</span>
                    </div>
                </div>
                <p>BACKUP DATA FROM SERVER</p>
                <div class="progress progress-xs for-modal">
                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 95%">
                        <span class="sr-only">95&#37; Complete</span>
                    </div>
                </div>
                <p>RE-DESIGNING WEB APPLICATION</p>
                <div class="progress progress-xs for-modal">
                    <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                        <span class="sr-only">100&#37; Complete</span>
                    </div>
                </div>
                <p class="text-center">
                    <button class="btn btn-danger btn-sm md-close">Close</button>
                </p>
            </div>
        </div>
    </div>
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
                    <h1><i class="fa fa-university"></i> Organizacion  <?php i18n::__('adminusu') ?></h1>
                    <h3>Organizaciones  Del Sistema</h3>            	</div>
                <!-- Page Heading End-->				<!-- Your awesome content goes here -->
                <div class="row">

                    <div class="col-md-12">
                        <div class="widget">
                            <div class="widget-header">
                                <h2><strong> Organizacion  <?php i18n::__('adminusu') ?></strong></h2>
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
                                            <h4 class="modal-title" id="myModalLabel">Filtros</h4>
                                        </div>
                                        <div class="modal-body">
                                            <form method="POST" role="form" id="filterForm" action="<?php echo routing::getInstance()->getUrlWeb('organizacion', 'index') ?>">
                                                <div class="form-group">
                                                    <label for="filterusuario" class="col-sm-2 control-label">Usuario</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" id="filterUsuario" name="filter[usuario]" placeholder="Nombre De Usuario">
                                                        </br>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-2 control-label">Fecha Creacion</label>
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
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                            <button type="button" onclick="$('#filterForm').submit()"  class="btn btn-primary">Filtrar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--END MODAL FILTER--> 
                            <div class="widget-content">
                                <br>					
                                <div class="table-responsive">
                                    <form id="frmDeleteAll" class='form-horizontal' action="<?php echo routing::getInstance()->getUrlWeb('organizacion', 'deleteSelect') ?>" method="POST">
                                        <div  style="margin-bottom: 10px; margin-top: 20px;">
                                            <a href="<?php echo routing::getInstance()->getUrlWeb('organizacion', 'insert') ?>" class="btn btn-success btn-medium"><i class="fa fa-plus-square-o"></i> Nuevo</a>
                                            <a href="#" class="btn btn-danger btn-medium" onclick="borrarSeleccion()">Borrar</a>
                                            <a href="<?php echo routing::getInstance()->getUrlWeb('organizacion', 'report') ?>" class="btn btn-default btn-medium"><i class="fa fa-file-pdf-o"></i> Exportar A PDF</a>
                                            <a href="#" onclick="window.print();" class="btn btn-primary btn-medium" title="Imprimir"><i class="fa fa-print"></i> </a> 
                                            <button type="button" class="btn btn-primary btn-medium" data-toggle="modal" data-target="#myModalfilter"><i class="fa fa-search"></i> Filtro</button>
                                            <a class="btn btn-default btn-medium" href="<?php echo routing::getInstance()->getUrlWeb('organizacion', 'deleteFilters') ?>"><i class="fa fa-minus-circle"></i> Eliminar Filtros</a>
                                        </div>
                                        <table id="datatables-1" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                            <thead>
                                                <tr>
                                                    <th><input type="checkbox" id="chkAll"></th>
                                                    <th>Nombre<?php i18n::__('usuario') ?></th>
                                                    <th>Pagina Web<?php i18n::__('usuario') ?></th>
                                                    <th>Direccion<?php i18n::__('usuario') ?></th>
                                                    <th>Correo<?php i18n::__('usuario') ?></th>
                                                    <th>Telefono<?php i18n::__('usuario') ?></th>
                                                    <th><?php echo i18n::__('actions') ?></th>
                                                </tr>
                                            </thead>

                                            <tfoot>
                                                <tr>
                                                    <th><input type="checkbox" id="chkAll"></th>
                                                    <th>Nombre<?php i18n::__('usuario') ?></th>
                                                    <th>Pagina Web<?php i18n::__('usuario') ?></th>
                                                    <th>Direccion<?php i18n::__('usuario') ?></th>
                                                    <th>Correo<?php i18n::__('usuario') ?></th>
                                                    <th>Telefono<?php i18n::__('usuario') ?></th>
                                                    <th><?php echo i18n::__('actions') ?></th>
                                                </tr>
                                            </tfoot>

                                            <tbody>
                                                <?php foreach ($objOrganizacion as $usuario): ?>
                                                  <tr>
                                                      <td><input type="checkbox" name="chk[]" value="<?php echo $usuario->$id ?>"></td>
                                                      <td><?php echo $usuario->$nombre ?></td>
                                                      <td><?php echo $usuario->$paginaweb ?></td>
                                                      <td><?php echo $usuario->$direccion ?></td>
                                                      <td><?php echo $usuario->$correo ?></td>
                                                      <td><?php echo $usuario->$telefono ?></td>
                                                      <td>
                                                          <!--                    <a href="#" class="btn btn-warning btn-xs">Ver</a>-->
                                                          <a href="<?php echo routing::getInstance()->getUrlWeb('organizacion', 'edit', array(organizacionTableClass::ID => $usuario->$id)) ?>" class="btn btn-primary btn-xs">Editar</a>
                                                          <a href="#" onclick="confirmarEliminar(<?php echo $usuario->$id ?>)" class="btn btn-danger btn-xs">Eliminar</a>

                                                      </td>
                                                  </tr>
                                                <?php endforeach ?>
                                            </tbody>
                                        </table>
                                    </form>
                                    <form id="frmDelete" action="<?php echo routing::getInstance()->getUrlWeb('organizacion', 'delete') ?>" method="POST">
                                        <input type="hidden" id="idDelete" name="<?php echo organizacionTableClass::getNameField(organizacionTableClass::ID, true) ?>">
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
