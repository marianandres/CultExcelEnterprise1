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
<?php $categoria = categoriaTableClass::NOMBRE ?>
<?php $facebook = eventoTableClass::FACEBOOK ?>
<?php $twitter = eventoTableClass::TWITTER ?>

<?php $idCateg = categoriaTableClass::ID ?>
<?php $nombreCateg = categoriaTableClass::NOMBRE ?>

<!-- Full Body Container -->
<div id="container" class="boxed-page">

    <?php mvc\view\viewClass::includePartial('partials/header.html') ?>
    <!-- Start Page Banner -->
    <div class="page-banner">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2><?php echo i18n::__('Eventos') ?></h2>
                    <p><?php echo i18n::__('EventosRecientes') ?> </p>
                </div>
                <div class="col-md-6">
                    <ul class="breadcrumbs">
                        <li><a href="#"><?php echo i18n::__('Inicio') ?></a></li>
                        <li><?php echo i18n::__('Eventos') ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Banner -->
    <!--Sidebar-->
    <div class="col-md-3 sidebar left-sidebar" style="padding-top: 120px;">
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
                                    <form role="form" id="filterFormEventName" method="POST" action="<?php echo routing::getInstance()->getUrlWeb('eventosBlog', 'index') ?>">
                                        <div class="form-group">
                                            <div class="icon-addon addon-lg">
                                                <input type="text" placeholder="Nombre Del Evento" id="filterEvento" name="filter[evento]" class="form-control"></br>
                                                <button type="button" onclick="$('#filterFormEventName').submit()"  class="btn btn-success"><i class="fa fa-search"></i> <?php echo i18n::__('Filtrar') ?></button>
                                            </div>
                                        </div>
                                    </form>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <form role="form" method="POST" id="filterCategoryName" action="<?php echo routing::getInstance()->getUrlWeb('eventosBlog', 'index') ?>">
                                        <div class="form-group">
                                            <div class="icon-addon addon-lg">
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
                                    <a class="btn btn-default btn-medium" href="<?php echo routing::getInstance()->getUrlWeb('eventosBlog', 'deleteFilters') ?>"><i class="fa fa-minus-circle"></i> <?php echo i18n::__('EliminarFiltros') ?></a>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"><span class="glyphicon glyphicon-search">
                            </span> Filtrar Eventos Por Precios</a>
                    </h4>
                </div>
                <div id="collapseTwo" class="panel-collapse collapse ">
                    <div class="panel-body">
                        <table class="table">
                            <tr>
                                <td>
                                    <form role="form" method="POST" id="filterCostPrice" action="<?php echo routing::getInstance()->getUrlWeb('eventosBlog', 'index') ?>">
                                        <div class="form-group">
                                            <div class="icon-addon addon-lg">
                                                <select class="form-control" id="filterCosto1" name="filter[costo1]">
                                                    <option value="10000">  $10.000 </option>
                                                    <option value="20000">  $20.000 </option>
                                                    <option value="60000">  $60.000 </option>
                                                    <option value="80000">  $80.000 </option>
                                                    <option value="100000"> $100.000 </option>
                                                </select></br>
                                                <select class="form-control" id="filterCosto2" name="filter[costo2]">
                                                    <option value="20000">  $20.000 </option>
                                                    <option value="60000">  $60.000 </option>
                                                    <option value="80000">  $80.000 </option>
                                                    <option value="500000"> $100.000 En Adelante </option>
                                                </select></br>
                                                <button type="button" onclick="$('#filterCostPrice').submit()"  class="btn btn-success"><i class="fa fa-search"></i> <?php echo i18n::__('Filtrar') ?></button>
                                            </div>
                                        </div>
                                    </form>
                                </td>

                            </tr>
                            <tr>
                                <td>
                                    <a class="btn btn-default btn-medium" href="<?php echo routing::getInstance()->getUrlWeb('eventosBlog', 'deleteFilters') ?>"><i class="fa fa-minus-circle"></i> <?php echo i18n::__('EliminarFiltros') ?></a>
                                </td>
                            </tr>

                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
    </br></br>
    </br></br>
    </br></br>
    <!--End sidebar-->

    <!-- Start Purchase Section -->
    <div class="section service">
        <div class="container">
            <div class="col-md-6">
                <h1 class="page-header"><i class="fa fa-calendar-o"></i> <?php echo i18n::__('EventosRecientes') ?></h1>
            </div>
            <div class="row">
                <!--MODAL FILTER -->  
                <div class="modal fade" id="myModalfilter" style="padding-top: 100px;" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop ="false">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel"><i class="fa fa-search"></i> <?php echo i18n::__('Filtros') ?> De Eventos Por Fechas</h4>
                            </div>
                            <div class="modal-body">
                                <form method="POST" role="form" id="filterForm" action="<?php echo routing::getInstance()->getUrlWeb('eventosBlog', 'index') ?>">

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

                <div class="  col-sm-9 ">
                    <ul class="event-list">
                        <?php if (empty($objEventos)) { ?>
                            <div class="alert alert-info alert-dismissible" role="alert">
    <!--                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>-->
                                <center>
                                    <strong></strong><i class="fa fa-calendar-o fa-5x"></i><h3>No Hay Eventos Relacionados Con Su Criterio De Busqueda!.</h3> 
                                </center>
                            </div>
                        <?php } else { ?>
                            <?php foreach ($objEventos as $eventos): ?>
                                <li>
                                    <time datetime="2014-07-20 0000">
                                        <span class="day"><?php echo $eventos->$fechainievento ?></span>
                                    </time>
                                    <img src="../../web/upload/<?php
                                    if ($eventos->$imagen == null) {
                                        echo 'default.jpg';
                                    } else {
                                        echo $eventos->$imagen;
                                    }
                                    ?>" width="500" height="500">
                                    <div class="info">
                                        <h2 class="title page-header"><?php echo $eventos->$usu ?></h2>
                                        <p class="desc"><?php echo $eventos->$descripcion ?></p>
                                        <p class="desc">Direccion: <?php echo $eventos->$direccion ?></p>
                                        <p class="desc">Inicio:<?php echo $eventos->$fechainievento ?>  Fin: <?php echo $eventos->$fechafnlevento ?></p>

                                        <ul>

                                            <li style="width:50%;"><a href="#website"><span class="fa fa-globe"></span> Categoria: <?php echo $eventos->$categoria ?></a></li>
                                            <li style="width:50%;"><span class="fa fa-money"></span> $<?php
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
                    <div class="text-center">
                        Pagina <select id="sqlPaginador" onchange="paginador(this, '<?php echo routing::getInstance()->getUrlWeb('eventosBlog', 'index') ?>')">
                            <?php for ($x = 1; $x <= $cntPages; $x++): ?>
                                <option <?php echo (isset($page) and $page == $x) ? 'selected' : '' ?> value="<?php echo $x ?>"><?php echo $x ?></option>
                            <?php endfor ?>
                        </select> 
                        de <?php echo $cntPages ?>
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