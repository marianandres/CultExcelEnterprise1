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
    <div class="col-md-3 sidebar left-sidebar">

    </div>
    <!--End sidebar-->

    <!-- Start Purchase Section -->
    <div class="section service">
        <div class="container">
            <div class="row">
                <h1 class="page-header"><i class="fa fa-calendar-o"></i> Mis Eventos</h1>
                <div class="col-sm-9">
                    <div class="row">
                        <div class="col-lg-6">
                            <input type="search" id="container-search" value="" class="form-control" placeholder="Buscar Eventos ...">
                        </div>
                    </div>
                </br>
                <div class="widget widget-tabbed">
                    <!-- Nav tab -->
                    <ul class="nav nav-tabs nav-justified">

                        <li class="active" ><a href="#about" data-toggle="tab"><i class="fa fa-user"></i> Eventos Publicados</a></li>
                        <li><a href="#user-activities" data-toggle="tab"><i class="fa fa-laptop"></i> Borradores</a></li>
                        <li><a href="#eventosPasados" data-toggle="tab"><i class="fa fa-laptop"></i> Anteriores</a></li>
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
                                            <?php if (empty($objUserEvents)) { ?>
                                                <div class="alert alert-info alert-dismissible" role="alert">
                    <!--                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>-->
                                                    <center>
                                                        <strong></strong><i class="fa fa-calendar-o fa-5x"></i><h3>No Tiene Eventos Publicados!.</h3> 
                                                        <?php if (usuarioTableClass::getVerifyUser(mvc\session\sessionClass::getInstance()->getUserId()) == 1) { ?>
                                                            Desea <a href="<?php echo routing::getInstance()->getUrlWeb('eventos', 'insert') ?>"><i class="fa fa-link"></i> Crear Evento</a>
                                                        <?php } ?>
                                                    </center>
                                                </div>
                                            <?php } else { ?>
                                                <?php foreach ($objUserEvents as $eventos): ?>
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
                                        <div class="text-center">
                                            Pagina <select id="sqlPaginador" onchange="paginador(this, '<?php echo routing::getInstance()->getUrlWeb('eventosBlog', 'index') ?>')">
                                                <?php for ($x = 1; $x <= $cntPages; $x++): ?>
                                                    <option <?php echo (isset($page) and $page == $x) ? 'selected' : '' ?> value="<?php echo $x ?>"><?php echo $x ?></option>
                                                <?php endfor ?>
                                            </select> 
                                            de <?php echo $cntPages ?>
                                        </div> 
                                    </div>

                                </div><!-- End div .row -->
                            </div><!-- End div .user-profile-content -->
                        </div><!-- End div .tab-pane -->
                        <!-- End Tab about -->


                        <!-- Tab user activities -->
                        <div class="tab-pane animated fadeInRight" id="user-activities">
                            <div class="scroll-user-widget">
                                <ul class="media-list">
                                    <li class="media">
                                        <a href="#fakelink">
                                            <p><strong>John Doe</strong> Uploaded a photo <strong>&#34;DSC000254.jpg&#34;</strong>
                                                <br /><i>2 minutes ago</i></p>
                                        </a>
                                    </li>
                                    <li class="media">
                                        <a href="#fakelink">
                                            <p><strong>John Doe</strong> Created an photo album  <strong>&#34;Indonesia Tourism&#34;</strong>
                                                <br /><i>8 minutes ago</i></p>
                                        </a>
                                    </li>
                                    <li class="media">
                                        <a href="#fakelink">
                                            <p><strong>Annisa</strong> Posted an article  <strong>&#34;Yogyakarta never ending Asia&#34;</strong>
                                                <br /><i>an hour ago</i></p>
                                        </a>
                                    </li>
                                    <li class="media">
                                        <a href="#fakelink">
                                            <p><strong>Johnny Depp</strong> Updated his avatar
                                                <br /><i>Yesterday</i></p>
                                        </a>
                                    </li>
                                </ul>
                            </div><!-- End div .scroll-user-widget -->
                        </div><!-- End div .tab-pane -->
                        <!-- End Tab user activities -->

                        <!-- Tab user messages -->
                        <div class="tab-pane animated fadeInRight" id="mymessage">
                            <div class="scroll-user-widget">
                                <ul class="media-list">
                                    <li class="media">
                                        <a class="pull-left" href="#fakelink">
                                            <img class="media-object" src="assets/img/avatar/2.jpg" alt="Avatar">
                                        </a>
                                        <div class="media-body">
                                            <h4 class="media-heading"><a href="#fakelink">John Doe</a> <small>Just now</small></h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <a class="pull-left" href="#fakelink">
                                            <img class="media-object" src="assets/img/avatar/1.jpg" alt="Avatar">
                                        </a>
                                        <div class="media-body">
                                            <h4 class="media-heading"><a href="#fakelink">Annisa</a> <small>Yesterday at 04:00 AM</small></h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam rhoncus</p>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <a class="pull-left" href="#fakelink">
                                            <img class="media-object" src="assets/img/avatar/5.jpg" alt="Avatar">
                                        </a>
                                        <div class="media-body">
                                            <h4 class="media-heading"><a href="#fakelink">Rusmanovski</a> <small>January 17, 2014 05:35 PM</small></h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <a class="pull-left" href="#fakelink">
                                            <img class="media-object" src="assets/img/avatar/4.jpg" alt="Avatar">
                                        </a>
                                        <div class="media-body">
                                            <h4 class="media-heading"><a href="#fakelink">Ari Rusmanto</a> <small>January 17, 2014 05:35 PM</small></h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <a class="pull-left" href="#fakelink">
                                            <img class="media-object" src="assets/img/avatar/3.jpg" alt="Avatar">
                                        </a>
                                        <div class="media-body">
                                            <h4 class="media-heading"><a href="#fakelink">Jenny Doe</a> <small>January 17, 2014 05:35 PM</small></h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <a class="pull-left" href="#fakelink">
                                            <img class="media-object" src="assets/img/avatar/2.jpg" alt="Avatar">
                                        </a>
                                        <div class="media-body">
                                            <h4 class="media-heading"><a href="#fakelink">John Doe</a> <small>Just now</small></h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <a class="pull-left" href="#fakelink">
                                            <img class="media-object" src="assets/img/avatar/1.jpg" alt="Avatar">
                                        </a>
                                        <div class="media-body">
                                            <h4 class="media-heading"><a href="#fakelink">Annisa</a> <small>Yesterday at 04:00 AM</small></h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam rhoncus</p>
                                        </div>
                                    </li>

                                    <li class="media">
                                        <a class="pull-left" href="#fakelink">
                                            <img class="media-object" src="assets/img/avatar/3.jpg" alt="Avatar">
                                        </a>
                                        <div class="media-body">
                                            <h4 class="media-heading"><a href="#fakelink">Jenny Doe</a> <small>January 17, 2014 05:35 PM</small></h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                                        </div>
                                    </li>
                                </ul>
                            </div><!-- End div .scroll-user-widget -->
                        </div><!-- End div .tab-pane -->
                        <!-- End Tab user messages -->
                    </div><!-- End div .tab-content -->
                </div><!-- End div .box-info -->
                <div class="col-sm-12">
                    <br>
                    <a href="<?php echo routing::getInstance()->getUrlWeb('usuario', 'report') ?>" class="btn btn-default btn-medium"><i class="fa fa-file-pdf-o"></i> Exportar En Formato PDF</a>    
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
<script src="//rawgithub.com/stidges/jquery-searchable/master/dist/jquery.searchable-1.0.0.min.js"></script>
<script>
$(function () {
    $( '#searchable-container' ).searchable({
        searchField: '#container-search',
        selector: '.row',
        childSelector: '.col-xs-4',
        show: function( elem ) {
            elem.slideDown(100);
        },
        hide: function( elem ) {
            elem.slideUp( 100 );
        }
    })
});
</script>