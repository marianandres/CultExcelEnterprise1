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
<?php $usu = usuarioTableClass::USER ?>
<?php $id = usuarioTableClass::ID ?>
<?php $created = usuarioTableClass::CREATED_AT ?>
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
                    <h1><i class="fa fa-files-o"></i>  <?php ?> Reportes</h1>
                    <h3><?php ?> Reportes De Eventos Publicados Por Categoria</h3>            	</div>
                <!-- Page Heading End-->				<!-- Your awesome content goes here -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="widget">
                            <div class="widget-header">
                                <h2><strong><?php ?> Grafica De Eventos Publicados Por Categoria (Eventos x Año)</strong></h2>
                                <div class="additional-btn">

                                    <a href="javascript:location.reload(true)" class="hidden reload"><i class="icon-ccw-1"></i></a>
                                    <a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
                                </div>
                            </div>
                            <div class="widget-content">
                                </br>
                                <br>					
                                <div class="row">
                                    <div class="widget-content padding">
                                        <div id="report-event"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="widget">
                            <div class="widget-header">
                                <h2><strong><?php ?> Reportes De Eventos Publicados Por Categoria</strong></h2>
                                <div class="additional-btn">

                                    <a href="javascript:location.reload(true)" class="hidden reload"><i class="icon-ccw-1"></i></a>
                                    <a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
                                </div>
                            </div>
                            <div class="widget-content">
                                </br>
                                <?php view::includeHandlerMessage() ?>
                                <br>					
                                <div class="table-responsive">
                                    <form id="frmDeleteAll" class='form-horizontal' action="<?php echo routing::getInstance()->getUrlWeb('usuario', 'deleteSelect') ?>" method="POST">
                                        <div  style="margin-bottom: 10px; margin-left: 10px; margin-top: 20px;">
                                            <a href="<?php echo routing::getInstance()->getUrlWeb('report', 'report') ?>" class="btn btn-primary btn-medium"><i class="fa fa-file-pdf-o"></i> <?php echo i18n::__('PDF') ?></a>
<!--                                            <a href="#" onclick="window.print();" class="btn btn-primary btn-medium" title="Imprimir"><i class="fa fa-print"></i> </a> -->
<!--                                            <button type="button" class="btn btn-primary btn-medium" data-toggle="modal" data-target="#myModalfilter"><i class="fa fa-search"></i> <?php echo i18n::__('Filtrar') ?></button>
                                            <a class="btn btn-default btn-medium" href="<?php echo routing::getInstance()->getUrlWeb('usuario', 'deleteFilters') ?>"><i class="fa fa-minus-circle"></i> <?php echo i18n::__('EliminarFiltros') ?></a>-->
                                        </div>
                                        <table id="datatables-1" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                            <thead>
                                                <tr>
                                                    <th><input type="checkbox" id="chkAll"></th>
                                                    <th><?php echo i18n::__('usuario') ?></th>
                                                    <th><?php echo i18n::__('fechaCreacion') ?></th>
                                                    <th><?php echo i18n::__('actions') ?></th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th><input type="checkbox" id="chkAll"></th>
                                                    <th><?php echo i18n::__('usuario') ?></th>
                                                    <th><?php echo i18n::__('fechaCreacion') ?></th>
                                                    <th><?php echo i18n::__('actions') ?></th>
                                                </tr>
                                            </tfoot>
                                            <tbody>
                                                <?php foreach ($objUsuarios as $usuario): ?>
                                                    <tr>
                                                        <td><input type="checkbox" name="chk[]" value="<?php echo $usuario->$id ?>"></td>
                                                        <td><?php echo $usuario->$usu ?></td>
                                                        <td><?php echo $usuario->$created ?></td>
                                                        <td>
                                                            <!--                    <a href="#" class="btn btn-warning btn-xs">Ver</a>-->
                                                            <a href="<?php echo routing::getInstance()->getUrlWeb('usuario', 'edit', array(usuarioTableClass::ID => $usuario->$id)) ?>" class="btn btn-primary btn-xs"> <?php echo i18n::__('Editar') ?></a>
                                                            <a href="#" onclick="confirmarEliminar(<?php echo $usuario->$id ?>)" class="btn btn-danger btn-xs"> <?php echo i18n::__('Eliminar') ?></a>
                                                            <a href="<?php echo routing::getInstance()->getUrlWeb('usuarioCredencial', 'index', array(usuarioCredencialTableClass::getNameField(usuarioCredencialTableClass::USUARIO_ID, true) => $usuario->$id)) ?>" class="btn btn-success btn-xs"><i class="fa fa-external-link-square"></i> <?php echo i18n::__('Detalles') ?></a>
                                                        </td>
                                                    </tr>
                                                <?php endforeach ?>
                                            </tbody>
                                        </table>
                                    </form>
                                    <form id="frmDelete" action="<?php echo routing::getInstance()->getUrlWeb('usuario', 'delete') ?>" method="POST">
                                        <input type="hidden" id="idDelete" name="<?php echo usuarioTableClass::getNameField(usuarioTableClass::ID, true) ?>">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Footer Start -->
                <?php view::includePartial('partials/footerBar') ?>
                <!-- Footer En<d -->			
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
    <script>
        Morris.Line({
            element: 'report-event',
            resize: true,
            data: [
                {y: '2013', a: 200, b: 90, c: 20, d: 30, e: 40, f: 50},
                {y: '2014', a: 75, b: 65, c: 120, d: 60, e: 80, f: 150},
                {y: '2015', a: 50, b: 40, c: 35, d: 38, e: 180, f: 15},
            ],
            xkey: 'y',
            ykeys: ['a', 'b', 'c', 'd', 'e', 'f'],
            labels: ['One To One', 'Coffee Break', 'Open', 'SuperSabado', 'Open Especial', 'Convenciones']
        });
    </script>
</div>