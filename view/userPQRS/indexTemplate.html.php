<?php

use mvc\routing\routingClass as routing;
use mvc\session\sessionClass as session;
?>
<?php

use mvc\i18n\i18nClass as i18n ?>
<?php
use mvc\view\viewClass as view ?>
<?php
$idTypePqrs = tipoPqrsTableClass::ID;
$nameTypePqrs = tipoPqrsTableClass::NOMBRE;

$id = pqrsTableClass::ID;
$titulo = pqrsTableClass::TITULO;
$tipo = pqrsTableClass::TIPO_PQRS_ID;
$estado = pqrsTableClass::ESTADOPQRS;
$contenido = pqrsTableClass::CONTENIDO;
?>
<!-- Full Body Container -->
<div id="container" class="boxed-page">
    <?php mvc\view\viewClass::includePartial('partials/header.html') ?>
    <!-- Start Page Banner -->
    <div class="page-banner">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2> Mis PQRS</h2>
                    <p>Administracions De Peticiones </p>
                </div>
                <div class="col-md-6">
                    <ul class="breadcrumbs">
                        <li><a href="#"><?php echo i18n::__('Inicio') ?></a></li>
                        <li> Mis PQRS</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Banner -->
    <!--Sidebar-->
<!--    <div class="col-md-3 sidebar left-sidebar" style="padding-top: 120px;">

    </div>-->
    <!--End sidebar-->

    <!-- Start Purchase Section -->
    <div class="section service">
        <div class="container">
            <div class="row">
                <h1 class="page-header"><i class="fa fa-calendar-o"></i> Mis PQRS</h1>

                <div class="col-sm-9">
                    <?php view::includeHandlerMessage() ?>
                    </br>
                    <form  id="registerForm" method="POST" action="<?php echo routing::getInstance()->getUrlWeb('userPQRS', 'create') ?>">
                        <div class="row">
                            <h3>Cuentamos Eu Experiencia En</h3><small>Cult Excel Enterprise</small>	
                        </div>
                        <hr style="height: 5px;
                            border-top: 0;
                            background: #c4e17f;
                            border-radius: 5px;
                            background-image: -webkit-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
                            background-image: -moz-linear-gradieRegistratent(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
                            background-image: -o-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
                            background-image: linear-gradient(to right, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);">
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-12">
                                <div class="form-group">
                                    <label> Selecciona El Tipo De Peticion: </label>
                                    <select class="form-control" id="<?php echo pqrsTableClass::getNameField(pqrsTableClass::TIPO_PQRS_ID) ?>" name="<?php echo pqrsTableClass::getNameField(pqrsTableClass::TIPO_PQRS_ID) ?>" required autofocus>
                                        <?php foreach ($objTypePqrs as $pqrsType): ?>
                                            <option value="<?php echo $pqrsType->$idTypePqrs ?>"> <?php echo $pqrsType->$nameTypePqrs ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-12">
                                <div class="form-group">
                                    <label> Asunto : </label>
                                    <input type="text" name="<?php echo pqrsTableClass::getNameField(pqrsTableClass::TITULO, true) ?>" class="form-control input-lg" placeholder="Ingresar El Asunto De La Peticion" required>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-12">
                                <div class="form-group">
                                    <textarea class="form-control" cols="5" rows="5" maxlength="2048" id="<?php echo pqrsTableClass::getNameField(pqrsTableClass::CONTENIDO, true) ?>" name="<?php echo pqrsTableClass::getNameField(pqrsTableClass::CONTENIDO, true) ?>" placeholder="Escribe Tu Peticion..." required></textarea>
                                </div>
                            </div>
                        </div>   

                        <hr style="height: 5px;
                            border-top: 0;
                            background: #c4e17f;
                            border-radius: 5px;
                            background-image: -webkit-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
                            background-image: -moz-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
                            background-image: -o-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
                            background-image: linear-gradient(to right, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);">
                        <div class="row">
                            <div class="col-lg-12 col-md-6">
                                <button type="submit" class="btn btn-success btn-block btn-lg"> Enviar Peticion</button>
                            </div>
                        </div>
                    </form>
                    </br></br>
                </div>
                <div class="col-sm-12">
                    <div>
                        <h2 class="page-header">
                            <i class="fa fa-send-o"></i> Administracion de PQRSF´S Del Usuario
                        </h2>
                    </div></br>
                    <div class="table-responsive">
                        <form id="frmDeleteAll" class='form-horizontal' action="<?php echo routing::getInstance()->getUrlWeb('usuario', 'deleteSelect') ?>" method="POST">
                            <div  style="margin-bottom: 10px; margin-left: 10px; margin-top: 20px;">
<!--                                <a href="#" class="btn btn-danger btn-medium" onclick="borrarSeleccion()"><?php echo i18n::__('Borrar') ?></a>-->
<!--                                            <a href="<?php echo routing::getInstance()->getUrlWeb('usuario', 'report') ?>" class="btn btn-default btn-medium"><i class="fa fa-file-pdf-o"></i> <?php echo i18n::__('PDF') ?></a>-->
<!--                                            <a href="#" onclick="window.print();" class="btn btn-primary btn-medium" title="Imprimir"><i class="fa fa-print"></i> </a> -->
<!--                                            <button type="button" class="btn btn-primary btn-medium" data-toggle="modal" data-target="#myModalfilter"><i class="fa fa-search"></i> <?php echo i18n::__('Filtrar') ?></button>
                                <a class="btn btn-default btn-medium" href="<?php echo routing::getInstance()->getUrlWeb('usuario', 'deleteFilters') ?>"><i class="fa fa-minus-circle"></i> <?php echo i18n::__('EliminarFiltros') ?></a>-->
                            </div>
                            <table id="datatables-1" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th><input type="checkbox" id="chkAll"></th>
                                        <th>Asunto</th>
                                        <th>Tipo De Peticion</th>
                                        <th>Mensaje De Peticion</th>
                                        <th>Estado De Proceso </th>
<!--                                                    <th>Codigo Verificacion</th>-->
     
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th><input type="checkbox" id="chkAll"></th>
                                        <th> Asunto</th>
                                        <th>Tipo De Peticion</th>
                                        <th>Mensaje De Peticion</th>
                                        <th>Estado De Proceso </th>
<!--                                                    <th>Codigo Verificacion</th>-->

                                    </tr>
                                </tfoot>
                                <tbody>
                                    <?php foreach ($objPqrs as $usuario): ?>
                                        <tr>
                                            <td><input type="checkbox" name="chk[]" value="<?php echo $usuario->$id ?>"></td>
                                            <td><?php echo $usuario->$titulo ?></td>
                                            <td><?php if ($usuario->$tipo == 1) { ?>
                                                    <span class="label label-info"> Solicitud</span> 
                                                <?php } ?>
                                                <?php if ($usuario->$tipo == 2) { ?>
                                                    <span class="label label-info"> Peticion</span> 
                                                <?php } ?>
                                                <?php if ($usuario->$tipo == 3) { ?>
                                                    <span class="label label-info"> Queja</span> 
                                                <?php } ?>
                                                <?php if ($usuario->$tipo == 4) { ?>
                                                    <span class="label label-info"> Reclamo</span> 
                                                <?php } ?>
                                                <?php if ($usuario->$tipo == 5) { ?>
                                                    <span class="label label-info"> Felicitacion</span> 
                                                <?php } ?></td>
                                            <td><?php echo $usuario->$contenido ?></td>
                                            <td><?php if ($usuario->$estado == 0) { ?>
                                                    <span class="label label-success"> Peticion Enviada</span> 
                                                <?php } ?>
                                                <?php if ($usuario->$estado == 1) { ?>
                                                    <span class="label label-danger"> Peticion Finalizada</span> 
                                                <?php } ?>
                                               
                                            </td>
<!--                                            <td>

                                                <a href="#" onclick="confirmarEliminar(<?php echo $usuario->$id ?>)" class="btn btn-danger btn-xs"> <?php echo i18n::__('Eliminar') ?></a>
                                            </td>-->
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
        </div><!-- .container -->
    </div>
    <!-- End Purchase Section --> 

    <!--  </header> -->
    <!-- End Header Section -->

    <!-- Start Services Section -->
    <?php mvc\view\viewClass::includePartial('partials/footer.html') ?>
</div>
<!-- End Full Body Container -->

<!-- Go To Top Link -->
<a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>
<div id="loader">
    <div class="spinner">
        <div class="dot1"></div>
        <div class="dot2"></div>
    </div>
</div>