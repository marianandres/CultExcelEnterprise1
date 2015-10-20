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
<?php $fechafnlpublicacion = eventoTableClass::FECHA_FINAL_PUBLICACION ?>
<?php $fechainipublicacion = eventoTableClass::FECHA_INICIAL_PUBLICACION ?>
<?php $fechafnlevento = eventoTableClass::FECHA_FINAL_EVENTO ?>
<?php $fechainievento = eventoTableClass::FECHA_INICIAL_EVENTO ?>
<?php $direccion = eventoTableClass::DIRECCION ?>
<?php $descripcion = eventoTableClass::DESCRIPCION ?>
<?php $usu = eventoTableClass::NOMBRE ?>
<?php $imagen = eventoTableClass::IMAGEN ?>
<?php $id = eventoTableClass::ID ?>
<?php $costo = eventoTableClass::COSTO ?>
<?php $categoria = eventoTableClass::CATEGORIA_ID ?>
<?php $facebook = eventoTableClass::FACEBOOK ?>
<?php $twitter = eventoTableClass::TWITTER ?>
<?php $estadoPub = eventoTableClass::ESTADOPUBLICACION ?>

<?php $idCateg = categoriaTableClass::ID ?>
<?php $nombreCateg = categoriaTableClass::NOMBRE ?>
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
                    <h1><i class="fa fa-calendar"></i> Admin. De Publicacion De <?php echo i18n::__('evento') ?> </h1>
                    <h3><?php echo i18n::__('EventosSist') ?></h3>            	</div>
                <!-- Page Heading End-->				
                <!-- Your awesome content goes here -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="widget">
                            <div class="widget-header">
                                <h2><strong>Admin. De Publicacion De <?php echo i18n::__('evento') ?></strong></h2>
                                <div class="additional-btn">

                                    <a href="javascript:location.reload(true)" class="hidden reload"><i class="icon-ccw-1"></i></a>
                                    <a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
                                    <a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
                                </div>
                            </div>
                            <!--MODAL FILTER -->  
                            <div class="modal fade" id="myModalfilter" style="padding-top: 100px;" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop ="false">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title" id="myModalLabel"><i class="fa fa-search"></i> <?php echo i18n::__('Filtros') ?> De Eventos Por Fechas</h4>
                                        </div>
                                        <div class="modal-body">
                                            <form method="POST" role="form" id="filterForm" action="<?php echo routing::getInstance()->getUrlWeb('evento', 'index') ?>">

                                                <div class="form-group">

                                                    <div class="col-sm-10">
                                                        <label> Fecha De Inicio Del Evento:</label>
                                                        <input type="date" class="form-control" id="filterDate1" name="filter[fechaCreacion1]">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-sm-10">
                                                        <label> Fecha De Finalizacion Del Evento:</label>
                                                        <input type="date" class="form-control" id="filterDate2" name="filter[fechaCreacion2]">
                                                    </div>
                                                </div>
                                            </form>
                                        </div></br></br></br>
                                        </br></br>
                                        </br>

                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo i18n::__('Cerra') ?></button>
                                            <button type="button" onclick="$('#filterForm').submit()"  class="btn btn-primary"><?php echo i18n::__('Filtrar') ?></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--END MODAL FILTER--> 
                            <!--MODAL VALIDACION EVENTO -->  
                            <div class="modal fade" id="ValidateEvent" style="padding-top: 100px;" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop ="false">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title" id="myModalLabel"><i class="fa fa-search"></i> Validacion De Publicacion Del Evento</h4>
                                        </div>
                                        <div class="modal-body">

                                            <form method="POST" role="form" action="<?php echo routing::getInstance()->getUrlWeb('evento', 'validateEvent') ?>">

                                                <input name="<?php echo eventoTableClass::getNameField(eventoTableClass::ID, true) ?>" id="<?php echo eventoTableClass::getNameField(eventoTableClass::ID, true) ?>" type="hidden">
                                                <div class="alert alert-warning alert-dismissible" role="alert">
                                            <!--                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>-->
                                                    <strong></strong><i class="fa fa-info-circle"></i> Esta Seguro De Publicar Este Evento. !
                                                </div>
                                                <div class="form-group">  
                                                    <label for="statuskey" class="control-label">Contraseña Del Administrador</label>	  
                                                    <input class="form-control" 
                                                           type="password" id="<?php echo usuarioTableClass::getNameField(usuarioTableClass::PASSWORD, true) ?>" name="<?php echo usuarioTableClass::getNameField(usuarioTableClass::PASSWORD, true) ?>" placeholder="Ingresar Contraseña de Administrador
                                                           " required autofocus>
                                                </div>
                                                <button type="submit"  class="btn btn-success"> Publicar Evento</button>
                                            </form>

                                        </div>

                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo i18n::__('Cerra') ?></button>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--END MODAL VALIDACION EVENTO--> 
                            <!--MODAL RECHAZO EVENTO -->  
                            <div class="modal fade" id="rejectedEvent" style="padding-top: 100px;" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop ="false">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title" id="myModalLabel"><i class="fa fa-search"></i> Rechazo De Publicacion Del Evento</h4>
                                        </div>
                                        <div class="modal-body">

                                            <form method="POST" role="form"  action="<?php echo routing::getInstance()->getUrlWeb('evento', 'rejectedEvent') ?>">

                                                <input name="<?php echo eventoTableClass::getNameField(eventoTableClass::ID, true) ?>" id="<?php echo eventoTableClass::getNameField(eventoTableClass::ID, true) ?>" type="hidden">
                                                <div class="alert alert-warning alert-dismissible" role="alert">
                                            <!--                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>-->
                                                    <strong></strong><i class="fa fa-info-circle"></i> Esta Seguro De Rechazar La Publicacion Este Evento. !
                                                </div>
                                                <div class="form-group">  
                                                    <label for="statuskey" class="control-label">Contraseña Del Administrador</label>	  
                                                    <input class="form-control" 
                                                           type="password" id="<?php echo usuarioTableClass::getNameField(usuarioTableClass::PASSWORD, true) ?>" name="<?php echo usuarioTableClass::getNameField(usuarioTableClass::PASSWORD, true) ?>" placeholder="Ingresar Contraseña de Administrador
                                                           " required autofocus>
                                                </div>
                                                <button type="submit"   class="btn btn-danger"> Rechazar Evento</button>
                                            </form>

                                        </div>

                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo i18n::__('Cerra') ?></button>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--END MODAL rechazo EVENTO--> 
                            <div class="widget-content">
                                </br></br>
                                <!--Sidebar-->
                                <div class="col-md-3 sidebar left-sidebar">
                                    <div class="panel-group" id="accordion">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><span class="glyphicon glyphicon-search">
                                                        </span> Filtros</a>
                                                </h4>
                                            </div>
                                            <div id="collapseOne" class="panel-collapse collapse in">
                                                <div class="panel-body">
                                                    <table class="table">
                                                        <tr>
                                                            <td>
                                                                <button type="button" class="btn btn-primary btn-medium" data-toggle="modal" data-target="#myModalfilter"><i class="fa fa-search"></i> <?php echo i18n::__('Filtrar') ?></button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <form role="form" id="filterFormEventName" method="POST" action="<?php echo routing::getInstance()->getUrlWeb('evento', 'index') ?>">
                                                                    <div class="form-group">
                                                                        <div class="icon-addon addon-lg">
                                                                            <label > Criterios De Busqueda:</label>
                                                                            <input type="text" placeholder="Nombre Del Evento" id="filterEvento" name="filter[evento]" class="form-control"></br>
                                                                            <button type="button" onclick="$('#filterFormEventName').submit()"  class="btn btn-success"><i class="fa fa-search"></i> <?php echo i18n::__('Filtrar') ?></button>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <form role="form" method="POST" id="filterCategoryName" action="<?php echo routing::getInstance()->getUrlWeb('evento', 'index') ?>">
                                                                    <div class="form-group">
                                                                        <div class="icon-addon addon-lg">
                                                                            <label> Seleccionar Categoria Del Evento:</label>
                                                                            <select class="form-control" id="filterCategoria" name="filter[categoria]">
                                                                                <?php foreach ($objCategoria as $categorias): ?>
                                                                                    <option value="<?php echo $categorias->$idCateg ?>"> <?php echo $categorias->$nombreCateg ?></option>
                                                                                <?php endforeach; ?>
                                                                            </select>
                                                                            </br>
                                                                            <button type="button" onclick="$('#filterCategoryName').submit()"  class="btn btn-success"><i class="fa fa-search"></i> <?php echo i18n::__('Filtrar') ?></button>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <a class="btn btn-default btn-medium" href="<?php echo routing::getInstance()->getUrlWeb('evento', 'deleteFilters') ?>"><i class="fa fa-minus-circle"></i> <?php echo i18n::__('EliminarFiltros') ?></a>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!--End sidebar-->
                                <div class="col-sm-9">
                                    <div class="row">
                                        <div class="widget widget-tabbed">
                                            <!-- Nav tab -->
                                            <ul class="nav nav-tabs nav-justified">

                                                <li class="active" ><a href="#about" data-toggle="tab"><i class="fa fa-user"></i> Eventos A Publicar</a></li>
                                                <li><a href="#user-activities" data-toggle="tab"><i class="fa fa-laptop"></i> Eventos Publicados</a></li>
                                                <li><a href="#eventosPasados" data-toggle="tab"><i class="fa fa-laptop"></i> Eventos No Admitidos</a></li>
                                            </ul>
                                            <!-- End nav tab -->

                                            <!-- Tab panes -->
                                            <div class="tab-content">

                                                <!-- Tab about -->
                                                <div class="tab-pane animated active fadeInRight" id="about">
                                                    <div class="user-profile-content">
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <ul class="event-list" id="searchable-container">
                                                                    <?php if (empty($objValidateEvents)) { ?>
                                                                        <div class="alert alert-info alert-dismissible" role="alert">
                                            <!--                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>-->
                                                                            <center>
                                                                                <strong></strong><i class="fa fa-calendar-o fa-5x"></i><h3>No Tiene Eventos A Publicar!.</h3> 

                                                                            </center>
                                                                        </div>
                                                                    <?php } else { ?>
                                                                        <?php foreach ($objValidateEvents as $eventos): ?>
                                                                            <li>
                                                                                <time datetime="2014-07-20 0000">
                                                                                    <span class="day"><?php echo $eventos->$fechainievento ?></span>
                                                                                </time>
                                                                                <img src="../../upload/<?php
                                                                                if ($eventos->$imagen == null) {
                                                                                    echo 'default.jpg';
                                                                                } else {
                                                                                    echo $eventos->$imagen;
                                                                                }
                                                                                ?>" width="500" height="500">
                                                                                <div class="info">
                                                                                    <h2 class="title page-header"><?php echo $eventos->$usu ?> </h2>
                                                                                    <?php if ($eventos->$estadoPub == 0) { ?>
                                                                                        <button type="button" class="open-Modal btn btn-success btn-xs" data-toggle="modal" data-id="<?php echo $eventos->$id ?>" data-target="#ValidateEvent"><i class="fa fa-check-circle-o"></i> Validar Publicacion</button>
                                                                                        <span class="label label-success"><i class="fa fa-calendar-o"></i> <?php echo $eventos->$fechainipublicacion ?></span>
                                                                                        <button type="button" class="open-Modal btn btn-danger btn-xs" data-toggle="modal" data-id="<?php echo $eventos->$id ?>" data-target="#rejectedEvent"><i class="fa fa-trash-o"></i> Rechazar Publicacion</button>
                                                                                    <?php } else { ?>
                                                                                        <span class="label label-danger"> PUBLICACION DE EVENTO NO ADMITIDA</span>
                                                                                        <span class="label label-success"> EVENTO PUBLICADO</span>
                                                                                    <?php } ?>
                                                                                    <p class="desc"><?php echo $eventos->$descripcion ?></p>
                                                                                    <p class="desc">Direccion: <?php echo $eventos->$direccion ?></p>
                                                                                    <p class="desc">Inicio:<?php echo $eventos->$fechainievento ?>  Fin: <?php echo $eventos->$fechafnlevento ?></p>

                                                                                    <ul>

                                                                                        <li style="width:50%;"><a href="#website"><span class="fa fa-globe"></span> Categoria: <?php echo $eventos->$categoria ?></a></li>
                                                                                        <li style="width:50%;"><span class="fa fa-money"></span> <?php
                                                                                            if ($eventos->$costo == 0) {
                                                                                                echo 'Gratis / Free';
                                                                                            } else {
                                                                                                echo $eventos->$costo;
                                                                                            }
                                                                                            ?></li>
                                                                                    </ul>
                                                                                </div>
                                                                                <div class="social">
                                                                                    <ul>
                                                                                        <li class="facebook" style="width:33%;"><a href="https://www.<?php
                                                                                            if ($eventos->$facebook == null) {
                                                                                                echo 'facebook.com';
                                                                                            } else {
                                                                                                echo $eventos->$facebook;
                                                                                            }
                                                                                            ?>"><span class="fa fa-facebook"></span></a></li>
                                                                                        <li class="twitter" style="width:34%;"><a href="https://www.<?php
                                                                                            if ($eventos->$twitter == null) {
                                                                                                echo 'twitter.com';
                                                                                            } else {
                                                                                                echo $eventos->$twitter;
                                                                                            }
                                                                                            ?>"><span class="fa fa-twitter"></span></a></li>
                                                                                        <li class="google-plus" style="width:33%;"><a href="#google-plus"><span class="fa fa-google-plus"></span></a></li>
                                                                                    </ul>
                                                                                </div>
                                                                            </li>
                                                                        <?php endforeach ?>
                                                                    <?php } ?>

                                                                </ul>
                                                                <!--                                                                <div class="text-center">
                                                                                                                                    Pagina <select id="sqlPaginador" onchange="paginador(this, '<?php echo routing::getInstance()->getUrlWeb('evento', 'index') ?>')">
                                                                <?php for ($x = 1; $x <= $cntPagesValidating; $x++): ?>
                                                                                                                                                <option <?php echo (isset($page) and $page == $x) ? 'selected' : '' ?> value="<?php echo $x ?>"><?php echo $x ?></option>
                                                                <?php endfor ?>
                                                                                                                                    </select> 
                                                                                                                                    de <?php echo $cntPagesValidating ?>
                                                                                                                                </div> -->
                                                            </div>

                                                        </div><!-- End div .row -->
                                                    </div><!-- End div .user-profile-content -->
                                                </div><!-- End div .tab-pane -->
                                                <!-- End Tab about -->


                                                <!-- Tab user activities -->
                                                <div class="tab-pane animated fadeInRight" id="user-activities">
                                                    <div class="scroll-user-widget">
                                                        <ul class="event-list" id="searchable-container">
                                                            <?php if (empty($objPublishedEvents)) { ?>
                                                                <div class="alert alert-info alert-dismissible" role="alert">
                                    <!--                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>-->
                                                                    <center>
                                                                        <strong></strong><i class="fa fa-calendar-o fa-5x"></i><h3>No Tiene Eventos Guardados Como Borrador!.</h3> 

                                                                    </center>
                                                                </div>
                                                            <?php } else { ?>
                                                                <?php foreach ($objPublishedEvents as $eventos): ?>
                                                                    <li>
                                                                        <time datetime="2014-07-20 0000">
                                                                            <span class="day"><?php echo $eventos->$fechainievento ?></span>
                                                                        </time>
                                                                        <img src="../../upload/<?php
                                                                        if ($eventos->$imagen == null) {
                                                                            echo 'default.jpg';
                                                                        } else {
                                                                            echo $eventos->$imagen;
                                                                        }
                                                                        ?>" width="500" height="500">
                                                                        <div class="info">
                                                                            <h2 class="title page-header"><?php echo $eventos->$usu ?></h2>
                                                                            <?php if ($eventos->$estadoPub == 1) { ?>
                                                                                <span class="label label-success"> EVENTO PUBLICADO</span>
                                                                                <span class="label label-success"> <?php echo $eventos->$fechainipublicacion ?></span>

                                                                            <?php } else { ?>
                                                                                <span class="label label-danger"> PUBLICACION DE EVENTO NO ADMITIDA</span>
                                                                                <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#ValidateEvent"><i class="fa fa-check-circle-o"></i> Validar Publicacion Del Evento</button>
                                                                            <?php } ?>
                                                                            <p class="desc"><?php echo $eventos->$descripcion ?></p>
                                                                            <p class="desc">Direccion: <?php echo $eventos->$direccion ?></p>
                                                                            <p class="desc">Inicio:<?php echo $eventos->$fechainievento ?>  Fin: <?php echo $eventos->$fechafnlevento ?></p>

                                                                            <ul>

                                                                                <li style="width:50%;"><a href="#website"><span class="fa fa-globe"></span> Categoria: <?php echo $eventos->$categoria ?></a></li>
                                                                                <li style="width:50%;"><span class="fa fa-money"></span> <?php
                                                                                    if ($eventos->$costo == 0) {
                                                                                        echo 'Gratis / Free';
                                                                                    } else {
                                                                                        echo $eventos->$costo;
                                                                                    }
                                                                                    ?></li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="social">
                                                                            <ul>
                                                                                <li class="facebook" style="width:33%;"><a href="https://www.<?php
                                                                                    if ($eventos->$facebook == null) {
                                                                                        echo 'facebook.com';
                                                                                    } else {
                                                                                        echo $eventos->$facebook;
                                                                                    }
                                                                                    ?>"><span class="fa fa-facebook"></span></a></li>
                                                                                <li class="twitter" style="width:34%;"><a href="https://www.<?php
                                                                                    if ($eventos->$twitter == null) {
                                                                                        echo 'twitter.com';
                                                                                    } else {
                                                                                        echo $eventos->$twitter;
                                                                                    }
                                                                                    ?>"><span class="fa fa-twitter"></span></a></li>
                                                                                <li class="google-plus" style="width:33%;"><a href="#google-plus"><span class="fa fa-google-plus"></span></a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </li>
                                                                <?php endforeach ?>
                                                            <?php } ?>

                                                        </ul>
                                                        <!--                                                        <div class="text-center">
                                                                                                                    Pagina <select id="sqlPaginador" onchange="paginador(this, '<?php echo routing::getInstance()->getUrlWeb('evento', 'index') ?>')">
                                                        <?php for ($x = 1; $x <= $cntPagesPublished; $x++): ?>
                                                                                                                                <option <?php echo (isset($page2) and $page2 == $x) ? 'selected' : '' ?> value="<?php echo $x ?>"><?php echo $x ?></option>
                                                        <?php endfor ?>
                                                                                                                    </select> 
                                                                                                                    de <?php echo $cntPagesPublished ?>
                                                                                                                </div>-->
                                                    </div><!-- End div .scroll-user-widget -->
                                                </div><!-- End div .tab-pane -->
                                                <!-- End Tab user activities -->

                                                <!-- Tab user messages -->
                                                <div class="tab-pane animated fadeInRight" id="eventosPasados">
                                                    <div class="scroll-user-widget">
                                                        <ul class="event-list" id="searchable-container">
                                                            <?php if (empty($objRevokedEvents)) { ?>
                                                                <div class="alert alert-info alert-dismissible" role="alert">
                                    <!--                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>-->
                                                                    <center>
                                                                        <strong></strong><i class="fa fa-calendar-o fa-5x"></i><h3>No Tiene Eventos No Admitidos !.</h3> 

                                                                    </center>
                                                                </div>
                                                            <?php } else { ?>
                                                                <?php foreach ($objRevokedEvents as $eventos): ?>
                                                                    <li>
                                                                        <time datetime="2014-07-20 0000">
                                                                            <span class="day"><?php echo $eventos->$fechainievento ?></span>
                                                                        </time>
                                                                        <img src="../../upload/<?php
                                                                        if ($eventos->$imagen == null) {
                                                                            echo 'default.jpg';
                                                                        } else {
                                                                            echo $eventos->$imagen;
                                                                        }
                                                                        ?>" width="500" height="500">
                                                                        <div class="info">
                                                                            <h2 class="title page-header"><?php echo $eventos->$usu ?></h2>
                                                                            <?php if ($eventos->$estadoPub == 2) { ?>
                                                                                <span class="label label-danger"> PUBLICACION DE EVENTO NO ADMITIDA</span>


                                                                            <?php } else { ?>
                                                                                <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#ValidateEvent"><i class="fa fa-check-circle-o"></i> Validar Publicacion Del Evento</button>
                                                                            <?php } ?>
                                                                            <p class="desc"><?php echo $eventos->$descripcion ?></p>
                                                                            <p class="desc">Direccion: <?php echo $eventos->$direccion ?></p>
                                                                            <p class="desc">Inicio:<?php echo $eventos->$fechainievento ?>  Fin: <?php echo $eventos->$fechafnlevento ?></p>

                                                                            <ul>

                                                                                <li style="width:50%;"><a href="#website"><span class="fa fa-globe"></span> Categoria: <?php echo $eventos->$categoria ?></a></li>
                                                                                <li style="width:50%;"><span class="fa fa-money"></span> <?php
                                                                                    if ($eventos->$costo == 0) {
                                                                                        echo 'Gratis / Free';
                                                                                    } else {
                                                                                        echo $eventos->$costo;
                                                                                    }
                                                                                    ?></li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="social">
                                                                            <ul>
                                                                                <li class="facebook" style="width:33%;"><a href="https://www.<?php
                                                                                    if ($eventos->$facebook == null) {
                                                                                        echo 'facebook.com';
                                                                                    } else {
                                                                                        echo $eventos->$facebook;
                                                                                    }
                                                                                    ?>"><span class="fa fa-facebook"></span></a></li>
                                                                                <li class="twitter" style="width:34%;"><a href="https://www.<?php
                                                                                    if ($eventos->$twitter == null) {
                                                                                        echo 'twitter.com';
                                                                                    } else {
                                                                                        echo $eventos->$twitter;
                                                                                    }
                                                                                    ?>"><span class="fa fa-twitter"></span></a></li>
                                                                                <li class="google-plus" style="width:33%;"><a href="#google-plus"><span class="fa fa-google-plus"></span></a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </li>
                                                                <?php endforeach ?>
                                                            <?php } ?>

                                                        </ul>
                                                        <!--                                                        <div class="text-center">
                                                                                                                    Pagina <select id="sqlPaginador" onchange="paginador(this, '<?php echo routing::getInstance()->getUrlWeb('evento', 'index') ?>')">
                                                        <?php for ($x = 1; $x <= $cntPagesRevoked; $x++): ?>
                                                                                                                                <option <?php echo (isset($page3) and $page3 == $x) ? 'selected' : '' ?> value="<?php echo $x ?>"><?php echo $x ?></option>
                                                        <?php endfor ?>
                                                                                                                    </select> 
                                                                                                                    de <?php echo $cntPagesRevoked ?>
                                                                                                                </div>-->
                                                    </div><!-- End div .scroll-user-widget -->
                                                </div><!-- End div .tab-pane -->
                                                <!-- End Tab user messages -->
                                            </div><!-- End div .tab-content -->
                                        </div><!-- End div .box-info -->
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <form id="frmDeleteAll" class='form-horizontal' action="<?php echo routing::getInstance()->getUrlWeb('evento', 'deleteSelect') ?>" method="POST">
                                        <div  style="margin-bottom: 10px; margin-top: 20px;">
                    <!--                      <a href="<?php echo routing::getInstance()->getUrlWeb('evento', 'insert') ?>" class="btn btn-success btn-medium"><i class="fa fa-plus-square-o"></i> Nuevo</a>-->
<!--                                            <a href="#" class="btn btn-danger btn-medium" onclick="borrarSeleccion()"> <?php echo i18n::__('Borrar') ?></a>
                                            <a href="<?php echo routing::getInstance()->getUrlWeb('evento', 'report') ?>" class="btn btn-default btn-medium"><i class="fa fa-file-pdf-o"></i><?php echo i18n::__('ExporPDF') ?> </a>
                                            <a href="#" onclick="window.print();" class="btn btn-primary btn-medium" title="Imprimir"><i class="fa fa-print"></i> </a> 
                                            <button type="button" class="btn btn-primary btn-medium" data-toggle="modal" data-target="#myModalfilter"><i class="fa fa-search"></i> <?php echo i18n::__('Filtro') ?></button>
                                            <a class="btn btn-default btn-medium" href="<?php echo routing::getInstance()->getUrlWeb('evento', 'deleteFilters') ?>"><i class="fa fa-minus-circle"></i> <?php echo i18n::__('EliminarFiltros') ?></a>-->
                                        </div>
                                        <table id="datatables-1" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                            <thead>
                                                <tr>
                                                    <th><input type="checkbox" id="chkAll"></th>
                                                    <th><?php echo i18n::__('Nombre') ?></th>
                                                    <th><?php echo i18n::__('Descripcion') ?></th>
                                                    <th><?php echo i18n::__('Direccion') ?></th>
                                                    <th><?php echo i18n::__('Inicial') ?></th>
                                                    <th><?php echo i18n::__('Final') ?></th>
<!--                                                    <th><?php echo i18n::__('Publicacion') ?></th>
                                                    <th><?php echo i18n::__('Fecha') ?></th>-->
                                                    <th><?php echo i18n::__('actions') ?></th>
                                                </tr>
                                            </thead>

                                            <tfoot>
                                                <tr>
                                                    <th><input type="checkbox" id="chkAll"></th>
                                                    <th><?php echo i18n::__('Nombre') ?></th>
                                                    <th><?php echo i18n::__('Descripcion') ?></th>
                                                    <th><?php echo i18n::__('Direccion') ?></th>
                                                    <th><?php echo i18n::__('Inicial') ?></th>
                                                    <th><?php echo i18n::__('Final') ?></th>
<!--                                                    <th><?php echo i18n::__('Publicacion') ?></th>
                                                    <th><?php echo i18n::__('Fecha') ?></th>-->
                                                    <th><?php echo i18n::__('actions') ?></th>
                                                </tr>
                                            </tfoot>

                                            <tbody>
                                                <?php foreach ($objUsuarios as $usuario): ?>
                                                    <tr>
                                                        <td><input type="checkbox" name="chk[]" value="<?php echo $usuario->$id ?>"></td>
                                                        <td><?php echo $usuario->$usu ?></td>
                                                        <td><?php echo $usuario->$descripcion ?></td>
                                                        <td><?php echo $usuario->$direccion ?></td>
                                                        <td><?php echo $usuario->$fechainievento ?></td>
                                                        <td><?php echo $usuario->$fechafnlevento ?></td>
    <!--                                                      <td><?php echo $usuario->$fechainipublicacion ?></td>
                                                        <td><?php echo $usuario->$fechafnlpublicacion ?></td>-->
                                                        <td>
                                                            <!--                                        <a href="#" class="btn btn-warning btn-xs">Ver</a>-->
    <!--                                                          <a href="<?php echo routing::getInstance()->getUrlWeb('usuario', 'edit', array(eventoTableClass::ID => $usuario->$id)) ?>" class="btn btn-primary btn-xs"><?php echo i18n::__('Editar') ?></a>-->
                                                            <a href="#" onclick="confirmarEliminar(<?php echo $usuario->$id ?>)" class="btn btn-danger btn-xs"><?php echo i18n::__('Eliminar') ?></a>
                                                        </td>
                                                    </tr>
                                                <?php endforeach ?>
                                            </tbody>
                                        </table>
                                    </form>
                                    <form id="frmDelete" action="<?php echo routing::getInstance()->getUrlWeb('evento', 'delete') ?>" method="POST">
                                        <input type="hidden" id="idDelete" name="<?php echo eventoTableClass::getNameField(eventoTableClass::ID, true) ?>">
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
    <script>
        $(document).on("click", ".open-Modal", function () {
            var myId = $(this).data('id');
            $(".modal-body #evento_id").val(myId);
        });
    </script>
</div>
