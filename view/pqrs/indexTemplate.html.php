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
<?php $id = pqrsTableClass::ID ?>
<?php $titulo = pqrsTableClass::TITULO ?>
<?php $usuid = pqrsTableClass::USUARIO_ID ?>
<?php $estadopqrs = pqrsTableClass::ESTADOPQRS ?>
<?php $contenido = pqrsTableClass::CONTENIDO ?>
<?php $tipopqrs = pqrsTableClass::TIPO_PQRS_ID ?>
<?php $respuesta = detallePqrsTableClass::RESPUESTA ?>


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
                    <h1><i class="fa fa-users"></i> Admin De  <?php echo i18n::__('PQRSPQRS') ?>´S</h1>
                    <h3>Admin De  <?php echo i18n::__('PQRSPQRS') ?>´S</h3>            	</div>
                <!-- Page Heading End-->				<!-- Your awesome content goes here -->
                <div class="row">

                    <div class="col-md-12">
                        <div class="widget">
                            <div class="widget-header">
                                <h2><strong>Administracion De  <?php echo i18n::__('PQRSPQRS') ?>´S</strong></h2>
                                <div class="additional-btn">

                                    <a href="javascript:location.reload(true)" class="hidden reload"><i class="icon-ccw-1"></i></a>
                                    <a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
<!--                                    <a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>-->
                                </div>
                            </div>
                            <div class="widget-content">
                                </br></br></br>
                                <div class="widget widget-tabbed">
                                    <!-- Nav tab -->
                                    <ul class="nav nav-tabs nav-justified">

                                        <li class="active" ><a href="#about" data-toggle="tab"><i class="fa fa-user"></i> Buzon De PQRSF</a></li>

                                        <li><a href="#eventosPasados" data-toggle="tab"><i class="fa fa-laptop"></i> Peticiones Finalizadas</a></li>
                                    </ul>
                                    <!-- End nav tab -->

                                    <!-- Tab panes -->
                                    <div class="tab-content">

                                        <!-- Tab about -->
                                        <div class="tab-pane animated active fadeInRight" id="about">
                                            <div class="user-profile-content">
                                                <div class="row">
                                                    <div class="col-sm-12">

                                                        <?php if (empty($objPqrs)) { ?>
                                                            <div class="alert alert-info alert-dismissible" role="alert">
                                <!--                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>-->
                                                                <center>
                                                                    <strong></strong><i class="fa fa-envelope-o fa-5x"></i><h3>No Tiene Ninguna Peticion En Su Buzon!.</h3> 

                                                                </center>
                                                            </div>
                                                        <?php } else { ?>
                                                            <div class="table-responsive">
                                                                <form id="frmDeleteAll" class='form-horizontal' action="<?php echo routing::getInstance()->getUrlWeb('pqrs', 'deleteSelect') ?>" method="POST">
                                                                    <div  style="margin-bottom: 10px; margin-left: 10px; margin-top: 20px;">
                            <!--                                            <a href="<?php echo routing::getInstance()->getUrlWeb('pqrs', 'insert') ?>" class="btn btn-success btn-medium"><i class="fa fa-plus-square-o"></i> <?php echo i18n::__('Nuevo') ?></a>-->
    <!--                                                                        <a href="#" class="btn btn-danger btn-medium" onclick="borrarSeleccion()"><?php echo i18n::__('Borrar') ?></a>-->
                            <!--                                            <a href="<?php echo routing::getInstance()->getUrlWeb('pqrs', 'report') ?>" class="btn btn-default btn-medium"><i class="fa fa-file-pdf-o"></i><?php echo i18n::__('ExporPDF') ?> </a>
                                                                        <a href="#" onclick="window.print();" class="btn btn-primary btn-medium" title="Imprimir"><i class="fa fa-print"></i> </a> 
                                                                        <button type="button" class="btn btn-primary btn-medium" data-toggle="modal" data-target="#myModalfilter"><i class="fa fa-search"></i><?php i18n::__('Filtro') ?> </button>
                                                                        <a class="btn btn-default btn-medium" href="<?php echo routing::getInstance()->getUrlWeb('pqrs', 'deleteFilters') ?>"><i class="fa fa-minus-circle"></i> <?php i18n::__('EliminarFiltros') ?></a>-->
                                                                    </div>
                                                                    <table id="datatables-1" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                                                        <thead>
                                                                            <tr>
    <!--                                                                                <th><input type="checkbox" id="chkAll"></th>-->
                                                                                <th>Asunto</th>
                                                                                <th>Tipo De Peticion</th>
                                                                                <th> Usuario</th>
                                                                                <th>Estado De Proceso</th>

                                                                            <!--                                                                                <th><?php echo i18n::__('contenido') ?></th>-->
                                                                                <th><?php echo i18n::__('actions') ?></th>
                                                                            </tr>
                                                                        </thead>

                                                                        <tfoot>
                                                                            <tr>
    <!--                                                                                <th><input type="checkbox" id="chkAll"></th>-->
                                                                                <th>Asunto</th>
                                                                                <th>Tipo De Peticion</th>
                                                                                <th> Usuario</th>
                                                                                <th>Estado De Proceso</th>

                                                                            <!--                                                                                <th><?php echo i18n::__('contenido') ?></th>-->
                                                                                <th><?php echo i18n::__('actions') ?></th>
                                                                            </tr>
                                                                        </tfoot>

                                                                        <tbody>
                                                                            <?php foreach ($objPqrs as $usuario): ?>
                                                                                <tr>
        <!--                                                                                    <td><input type="checkbox" name="chk[]" value="<?php echo $usuario->$id ?>"></td>-->
                                                                                    <td><?php echo $usuario->$titulo ?></td>
                                                                                    <td><?php if ($usuario->$tipopqrs == 1) { ?>
                                                                                            <span class="label label-info"> Solicitud</span> 
                                                                                        <?php } ?>
                                                                                        <?php if ($usuario->$tipopqrs == 2) { ?>
                                                                                            <span class="label label-info"> Peticion</span> 
                                                                                        <?php } ?>
                                                                                        <?php if ($usuario->$tipopqrs == 3) { ?>
                                                                                            <span class="label label-info"> Queja</span> 
                                                                                        <?php } ?>
                                                                                        <?php if ($usuario->$tipopqrs == 4) { ?>
                                                                                            <span class="label label-info"> Reclamo</span> 
                                                                                        <?php } ?>
                                                                                        <?php if ($usuario->$tipopqrs == 5) { ?>
                                                                                            <span class="label label-info"> Felicitacion</span> 
                                                                                        <?php } ?></td>
                                                                                    <td><?php echo usuarioTableClass::getUserName($usuario->$usuid) ?></td>
                                                                                    <td><?php if ($usuario->$estadopqrs == 0) { ?>
                                                                                            <span class="label label-success"> Peticion Recibida</span> 
                                                                                        <?php } ?>
                                                                                        <?php if ($usuario->$estadopqrs == 1) { ?>
                                                                                <sp<span class="label label-danger"> Peticion Finalizada</span> 
                                                                                <?php } ?>

                                                                                </td>

                                                                                                                                                        <!--                                                                                    <td><?php echo $usuario->$contenido ?></td>-->
                                                                                <td>
                                                                                    <button type="button" class="open-Modal btn  btn-success btn-xs" data-toggle="modal" data-id="<?php echo $usuario->$id ?>"   data-target="#active" ><i class="fa fa-envelope-o"></i> Responder </button>
                                                                                    <button type="button" class="open-Modal btn  btn-success btn-xs" data-toggle="modal" data-contenido="<?php echo $usuario->$contenido ?>"   data-target="#seeContenido" ><i class="fa fa-envelope-o"></i> Ver Peticion </button> 

                                                                       <!-- <a href="<?php echo routing::getInstance()->getUrlWeb('pqrs', 'edit', array(pqrsTableClass::ID => $usuario->$id)) ?>" class="btn btn-primary btn-xs"><?php i18n::__('Editar') ?></a>-->
                <!--                                                                                        <a href="#" onclick="confirmarEliminar(<?php echo $usuario->$id ?>)" class="btn btn-danger btn-xs"><?php i18n::__('Eliminar') ?></a>-->
                <!--                                                          <a href="<?php echo routing::getInstance()->getUrlWeb('pqrs', 'index', array(pqrsTableClass::getNameField(pqrsTableClass::USUARIO_ID, true) => $usuario->$id)) ?>" class="btn btn-success btn-xs"><i class="fa fa-external-link-square"></i><?php i18n::__('Detalles') ?> </a>-->

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
                                                        <?php } ?>                                                                
                                                    </div>

                                                </div><!-- End div .row -->
                                            </div><!-- End div .user-profile-content -->
                                        </div><!-- End div .tab-pane -->
                                        <!-- End Tab about -->

                                        <!-- Tab user messages -->
                                        <div class="tab-pane animated fadeInRight" id="eventosPasados">
                                            <div class="scroll-user-widget">

                                                <?php if (empty($objPqrsSent)) { ?>
                                                    <div class="alert alert-info alert-dismissible" role="alert">
                        <!--                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>-->
                                                        <center>
                                                            <strong></strong><i class="fa fa-envelope-o fa-5x"></i><h3>No Tiene Peticiones Finalizadas!.</h3> 

                                                        </center>
                                                    </div>
                                                <?php } else { ?>
                                                    <div class="table-responsive">
                                                        <form id="frmDeleteAll" class='form-horizontal' action="<?php echo routing::getInstance()->getUrlWeb('pqrs', 'deleteSelect') ?>" method="POST">
                                                            <div  style="margin-bottom: 10px; margin-left: 10px; margin-top: 20px;">
                    <!--                                            <a href="<?php echo routing::getInstance()->getUrlWeb('pqrs', 'insert') ?>" class="btn btn-success btn-medium"><i class="fa fa-plus-square-o"></i> <?php echo i18n::__('Nuevo') ?></a>-->
    <!--                                                                        <a href="#" class="btn btn-danger btn-medium" onclick="borrarSeleccion()"><?php echo i18n::__('Borrar') ?></a>-->
                    <!--                                            <a href="<?php echo routing::getInstance()->getUrlWeb('pqrs', 'report') ?>" class="btn btn-default btn-medium"><i class="fa fa-file-pdf-o"></i><?php echo i18n::__('ExporPDF') ?> </a>
                                                                <a href="#" onclick="window.print();" class="btn btn-primary btn-medium" title="Imprimir"><i class="fa fa-print"></i> </a> 
                                                                <button type="button" class="btn btn-primary btn-medium" data-toggle="modal" data-target="#myModalfilter"><i class="fa fa-search"></i><?php i18n::__('Filtro') ?> </button>
                                                                <a class="btn btn-default btn-medium" href="<?php echo routing::getInstance()->getUrlWeb('pqrs', 'deleteFilters') ?>"><i class="fa fa-minus-circle"></i> <?php i18n::__('EliminarFiltros') ?></a>-->
                                                            </div>
                                                            <table id="datatables-1" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                                                <thead>
                                                                    <tr>
    <!--                                                                                <th><input type="checkbox" id="chkAll"></th>-->
                                                                        <th>Asunto</th>
                                                                        <th>Tipo De Peticion</th>
                                                                        <th> Usuario</th>
                                                                        <th>Estado De Proceso</th>

                                                                            <!--                                                                                <th><?php echo i18n::__('contenido') ?></th>-->
                                                                        <th><?php echo i18n::__('actions') ?></th>
                                                                    </tr>
                                                                </thead>

                                                                <tfoot>
                                                                    <tr>
    <!--                                                                                <th><input type="checkbox" id="chkAll"></th>-->
                                                                        <th>Asunto</th>
                                                                        <th>Tipo De Peticion</th>
                                                                        <th> Usuario</th>
                                                                        <th>Estado De Proceso</th>

                                                                            <!--                                                                                <th><?php echo i18n::__('contenido') ?></th>-->
                                                                        <th><?php echo i18n::__('actions') ?></th>
                                                                    </tr>
                                                                </tfoot>

                                                                <tbody>
                                                                    <?php foreach ($objPqrsSent as $usuario): ?>
                                                                        <tr>
        <!--                                                                                    <td><input type="checkbox" name="chk[]" value="<?php echo $usuario->$id ?>"></td>-->
                                                                            <td><?php echo $usuario->$titulo ?></td>
                                                                            <td><?php if ($usuario->$tipopqrs == 1) { ?>
                                                                                    <span class="label label-info"> Solicitud</span> 
                                                                                <?php } ?>
                                                                                <?php if ($usuario->$tipopqrs == 2) { ?>
                                                                                    <span class="label label-info"> Peticion</span> 
                                                                                <?php } ?>
                                                                                <?php if ($usuario->$tipopqrs == 3) { ?>
                                                                                    <span class="label label-info"> Queja</span> 
                                                                                <?php } ?>
                                                                                <?php if ($usuario->$tipopqrs == 4) { ?>
                                                                                    <span class="label label-info"> Reclamo</span> 
                                                                                <?php } ?>
                                                                                <?php if ($usuario->$tipopqrs == 5) { ?>
                                                                                    <span class="label label-info"> Felicitacion</span> 
                                                                                <?php } ?></td>
                                                                            <td><?php echo usuarioTableClass::getUserName($usuario->$usuid) ?></td>
                                                                            <td><?php if ($usuario->$estadopqrs == 0) { ?>
                                                                                    <span class="label label-success"> Peticion Recibida</span> 
                                                                                <?php } ?>
                                                                                <?php if ($usuario->$estadopqrs == 1) { ?>
                                                                        <sp<span class="label label-danger"> Peticion Finalizada</span> 
                                                                        <?php } ?>

                                                                        </td>

                                                                                                                                                        <!--                                                                                    <td><?php echo $usuario->$contenido ?></td>-->
                                                                        <td>
                                                                            <?php if ($usuario->$estadopqrs == 0) { ?>
                                                                                <button type="button" class="open-Modal btn  btn-success btn-xs" data-toggle="modal" data-id="<?php echo $usuario->$id ?>"   data-target="#active" ><i class="fa fa-envelope-o"></i> Responder </button>
                                                                            <?php } ?>
                                                                            <button type="button" class="open-Modal btn  btn-success btn-xs" data-toggle="modal" data-answer="<?php echo $usuario->$respuesta ?>"   data-target="#seeAnswer" ><i class="fa fa-envelope-o"></i> Ver Respuesta </button>
                                                                            <!--                                                          
                    <a href="<?php echo routing::getInstance()->getUrlWeb('pqrs', 'edit', array(pqrsTableClass::ID => $usuario->$id)) ?>" class="btn btn-primary btn-xs"><?php i18n::__('Editar') ?></a>-->
        <!--                                                                                        <a href="#" onclick="confirmarEliminar(<?php echo $usuario->$id ?>)" class="btn btn-danger btn-xs"><?php i18n::__('Eliminar') ?></a>-->
                    <!--                                                          <a href="<?php echo routing::getInstance()->getUrlWeb('pqrs', 'index', array(pqrsTableClass::getNameField(pqrsTableClass::USUARIO_ID, true) => $usuario->$id)) ?>" class="btn btn-success btn-xs"><i class="fa fa-external-link-square"></i><?php i18n::__('Detalles') ?> </a>-->

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
                                                <?php } ?>



                                            </div><!-- End div .scroll-user-widget -->
                                        </div><!-- End div .tab-pane -->
                                        <!-- End Tab user messages -->
                                    </div><!-- End div .tab-content -->
                                </div><!-- End div .box-info -->
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
    <script>
        $(document).on("click", ".open-Modal", function () {
            var myId = $(this).data('id');
            $(".modal-body #pqrs_id").val(myId);


        });
        $(document).on("click", ".open-Modal", function () {
            var myrespuesta = $(this).data('answer');
            $(".modal-body #detalle_pqrs_respuesta").val(myrespuesta);

        });
        $(document).on("click", ".open-Modal", function () {
            var mycontenido = $(this).data('contenido');
            $(".modal-body #pqrs_contenido").val(mycontenido);

        });
    </script>
    <!-- Modal respuesta -->
    <div class="modal fade" id="active" style="margin-top: 50px;" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="false">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel"><i class="fa fa-user"></i> Respuesta De Peticion</h4>
                </div>
                <div class="modal-body">
                    <div class="text-left">
                        <form role="form" method="post" action="<?php echo routing::getInstance()->getUrlWeb('pqrs', 'answer') ?>">
                            <input name="<?php echo pqrsTableClass::getNameField(pqrsTableClass::ID, true) ?>" id="<?php echo pqrsTableClass::getNameField(pqrsTableClass::ID, true) ?>" type="hidden">
                            <div class="form-group"> 
                                <div class="alert alert-info alert-dismissible" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <strong><i class="fa fa-info-circle"></i>Info!</strong> Por Favor Ingresar La contraseña Del Administrador Para enviar La Respuesta A La Peticion Del Usuario.
                                </div>
                                <!--                            <label for="statuskey" class="control-label">Codigo De Activacion:</label>	  
                                                            <input class="form-control" 
                                                                   type="text" id="<?php echo usuarioTableClass::getNameField(usuarioTableClass::CODIGOKEY, true) ?>" name="<?php echo usuarioTableClass::getNameField(usuarioTableClass::CODIGOKEY, true) ?>" required autofocus>-->
                            </div>
                            <div class="form-group">  
                                <label for="password" class="control-label">Respuesta De Peticion: </label>	  
                                <textarea class="form-control" cols="5" rows="5" maxlength="2048" id="<?php echo detallePqrsTableClass::getNameField(detallePqrsTableClass::RESPUESTA, true) ?>" name="<?php echo detallePqrsTableClass::getNameField(detallePqrsTableClass::RESPUESTA, true) ?>" placeholder="Escribe Tu Respuesta..." required></textarea>
                            </div>
                            <div class="form-group">  
                                <label for="password" class="control-label">Contraseña Del Administrador</label>	  
                                <input class="form-control" 
                                       type="password" id="<?php echo usuarioTableClass::getNameField(usuarioTableClass::PASSWORD, true) ?>" name="<?php echo usuarioTableClass::getNameField(usuarioTableClass::PASSWORD, true) ?>" placeholder="Ingresar Contraseña de Administrador
                                       " required autofocus>
                            </div>
                            </br></br>
                            <button class="btn btn-success" type="submit"> Responder Peticion</button>
                        </form>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- end Modal respuesta -->
    <!-- Modal respuesta -->
    <div class="modal fade" id="seeAnswer" style="margin-top: 50px;" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="false">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel"><i class="fa fa-envelope-o"></i> Respuesta De Peticion Enviada</h4>
                </div>
                <div class="modal-body">
                    <div class="text-left">
                        <form role="form" method="post" action="<?php echo routing::getInstance()->getUrlWeb('pqrs', 'answer') ?>">
                            <div class="form-group"> 
                                <div class="alert alert-info alert-dismissible" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <strong><i class="fa fa-info-circle"></i>Info!</strong> La Siguiente Informacion Es La Respuesta Enviada A La Solicitud Del Usuario.
                                </div>
                            </div>
                            <div class="form-group">  
                                <label for="password" class="control-label">Respuesta De Peticion Enviada: </label>	  
                                <textarea class="form-control" cols="5" rows="5" maxlength="2048" id="<?php echo detallePqrsTableClass::getNameField(detallePqrsTableClass::RESPUESTA, true) ?>" name="<?php echo detallePqrsTableClass::getNameField(detallePqrsTableClass::RESPUESTA, true) ?>" placeholder="Escribe Tu Respuesta..." required></textarea>
                            </div>
                            </br></br>
                            <button type="button" class="btn btn-default" data-dismiss="modal" aria-label="Close"> Cerrar</button>
                        </form>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- end Modal respuesta -->
    <!-- Modal respuesta -->
    <div class="modal fade" id="seeContenido" style="margin-top: 50px;" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="false">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel"><i class="fa fa-envelope-o"></i>  Peticion </h4>
                </div>
                <div class="modal-body">
                    <div class="text-left">
                        <form role="form" method="post" action="<?php echo routing::getInstance()->getUrlWeb('pqrs', 'answer') ?>">
                            <div class="form-group"> 
                                <div class="alert alert-info alert-dismissible" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <strong><i class="fa fa-info-circle"></i>Info!</strong> La Siguiente Informacion Es La Peticion Enviada Por El Usuario.
                                </div>
                            </div>
                            <div class="form-group">  
                                <label for="password" class="control-label"> Peticion Del Usuario: </label>	  
                                <textarea class="form-control" cols="5" rows="5" maxlength="2048" id="<?php echo pqrsTableClass::getNameField(pqrsTableClass::CONTENIDO, true) ?>" name="<?php echo pqrsTableClass::getNameField(pqrsTableClass::CONTENIDO, true) ?>" placeholder="Escribe Tu Respuesta..." required></textarea>
                            </div>
                            </br></br>
                            <button type="button" class="btn btn-default" data-dismiss="modal" aria-label="Close"> Cerrar</button>
                        </form>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- end Modal respuesta -->
</div>